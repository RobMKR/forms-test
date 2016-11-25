<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;
class FormController extends Controller
{
    public function index(Request $request){

        $curlData = $request->input();
        if($request->hasFile('file')){
            $file = $request->file('file')->getRealPath();
            $curlData['file_extension'] = $request->file('file')->getClientOriginalExtension();
        }



        if (function_exists('curl_file_create')) { // php 5.6+
            $cFile = curl_file_create($file);
        } else { //
            $cFile = '@' . realpath($file);
        }

        $curlData['file'] = $cFile;

        $header[] = 'X-Auth-Token: ' . config('api.token');

        switch($request->type){
            case 'physical' :
                $target_url = 'police.dev/api/ticket/physical';
                break;

            case 'juridical' :
                $target_url = 'police.dev/api/ticket/juridical';
                break;
            default: return false;
        }


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $target_url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlData);

        $result = curl_exec ($ch);

        curl_close ($ch);

        dd($result);
    }

    public function get(Request $request){
        $header[] = 'X-Auth-Token: ' . config('api.token');

        if($request->isMethod('post')){
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'police.dev/api/ticket/get');

            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_POST, 1);

            curl_setopt($ch, CURLOPT_POSTFIELDS, ['ticket_number' => $request->ticket_number]);

            $result = curl_exec ($ch);

            curl_close ($ch);

            dd($result);
        }
        return view('get');
    }
}
