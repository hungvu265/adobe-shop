<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Repositories\Common\ConfigRepository;
use Illuminate\Http\Request;

class ConfigController extends Controller {
    /**
     * @var ConfigRepository
     */
    protected $configRepository;

    function __construct(ConfigRepository $configRepository)
    {
        $this->middleware('auth');

        $this->configRepository = $configRepository;
    }

    public function update(Request $request) {
        $result = $this->configRepository->update($request);

        return processCommonResponse($result);
    }

    public function listing() {
        $result = $this->configRepository->listing();

        return $result;
    }
    public function getVoice(Request $request){
        try {
            $text = $request->get('text');
            $voice = $request->get('voice');
            $id = $request->get('id');
            $without_filter = $request->get('without_filter');
            $speed = $request->get('speed');
            $tts_return_option = $request->get('tts_return_option');
            $responses = sendRequest('https://staging.viettelai.vn/tts/speech_synthesis', [
                'text' => $text ,
                'voice' => $voice,
                'token' => 'eba13b1a8372519f49139b8be5410e80',
                'without_filter' => $without_filter,
                'speed' => $speed,
                'tts_return_option' => $tts_return_option,
            ], '', '','token','1SYq1CAEG7CAedgBg-2C8N2qsUSF6j3f4-lCqWfrDEFH342cDn6Hps5x40F8WO2k');

            return $responses;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function getURL(){
        $url = $_SERVER['SERVER_NAME'];
        if($_SERVER['SERVER_PORT']!='443'){
            $url .= ':'.$_SERVER['SERVER_PORT'];
        }
        return $url;
    }
}
