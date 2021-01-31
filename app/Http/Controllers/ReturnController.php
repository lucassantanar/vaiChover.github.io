<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ReturnController;

class ReturnController extends Controller
{
    public function retornaValorIndex (Request $request){
        
        $dados = $request->all();
        
        if($dados == null){
            
            $dados = ['nomeCidade' => 'Goias'];
        }
        
        $urlString = '&city_name='; 
        $nomeCidade = $dados['nomeCidade'];        

        $url = "https://api.hgbrasil.com/weather?format=JSON&key=f87e7d78".$urlString.$nomeCidade;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($ch);
        $result = json_decode($data);
        $result1['result1'] = $result -> results;

        return view('index', $result1);
    } 
}
