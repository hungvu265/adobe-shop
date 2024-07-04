<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediaStream Recording API Example</title>
</head>
<body>
<h1>MediaStream Recording API Example</h1>
<button id="startBtn">Start Recording</button>
<button id="stopBtn" disabled>Stop Recording</button>
<audio id="audioPlayback" controls></audio>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const startBtn = document.getElementById('startBtn');
        const stopBtn = document.getElementById('stopBtn');
        const audioPlayback = document.getElementById('audioPlayback');

        let mediaRecorder;
        let audioChunks = [];

        startBtn.addEventListener('click', async () => {
            // Yêu cầu quyền truy cập micro
            try {
                const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                startRecording(stream);
            } catch (err) {
                console.error('Error accessing microphone', err);
            }
        });

        stopBtn.addEventListener('click', () => {
            if (mediaRecorder) {
                mediaRecorder.stop();
            }
        });

        function startRecording(stream) {
            mediaRecorder = new MediaRecorder(stream);

            mediaRecorder.onstart = () => {
                audioChunks = [];
                startBtn.disabled = true;
                stopBtn.disabled = false;
            };

            mediaRecorder.ondataavailable = (event) => {
                if (event.data.size > 0) {
                    audioChunks.push(event.data);
                }
            };

            mediaRecorder.onstop = () => {
                console.log(audioChunks)
                const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                console.log(audioBlob)
                const audioUrl = URL.createObjectURL(audioBlob);
                audioPlayback.src = audioUrl;
                console.log(audioUrl)

                startBtn.disabled = false;
                stopBtn.disabled = true;
            };

            mediaRecorder.start();
        }
    });

</script>
</body>
</html>
