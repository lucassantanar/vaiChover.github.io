<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function retornaValorIndex (Request $request){
        
        $nome = $request -> input('nomeCidade');
         

        $url = "https://api.hgbrasil.com/weather?format=JSON&key=3518af26&city_name=Brasilia";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($ch);
        $result = json_decode($data);
        $result1 = $result -> results;
        
        return view("index", $result1);
    } 
}

