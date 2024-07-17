# adobe-shop


curl --location 'https://staging.viettelai.vn/tts/speech_synthesis' \
--header 'Content-Type: application/json' \
--data '{
    "text": "xin chao",
    "voice": "hn_quynhanh",
    "token": "eba13b1a8372519f49139b8be5410e80",
    "without_filter": false,
    "speed": 1.0,
    "tts_return_option": "2"
}'