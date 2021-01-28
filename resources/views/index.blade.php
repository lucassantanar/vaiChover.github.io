<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>vaiChover?</title>

        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
    </head>
    <body class="container">


    <?php

        $url = "https://api.hgbrasil.com/weather?format=JSON&key=3518af26&city_name=Brasilia";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($ch);
        $result = json_decode($data);
        $result1 = $result -> results;

    ?>



        <br/>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand"><i class="fal fa-clouds" style="color:CornflowerBlue"> <p style="font-family: 'Lobster', cursive;">VaiChover?</p></i></a>
                <form action="{ route('nameCity') }" class="form-inline my-2 my-lg-0" method="get">
                    <input name="nomeCidade" class="form-control mr-sm-2" type="search" placeholder="Nome da Cidade" aria-label="Nome da Capital">
                    <a href="https://api.hgbrasil.com/weather?format=JSON&key=3518af26&city_name=Brasilia" class="btn btn-outline-info my-2 my-sm-0">Pesquisar</a>
                </form>
            </nav>
        </div>
        <hr/>
        <div class="row" style="height: 300px;">
               
            <section class="col-5 p-3 mb-2 bg-light">
                
        <table class="table">
        <thead>
            <tr>
                <th>Cidade</th>
                <th>Temperatura</th>
                <th>Humidade</th>
                <th>Previsão</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$result1->city}}</td>
                <td>{{$result1->temp}}º</td>
                <td>{{$result1->humidity}}</td>
                <td>{{$result1->description}}</td>
            </tr>
        </tbody>
        </table>
                
                
            </section>
            <section class="col-7 p-3 mb-2" style="background-color:CornflowerBlue">
                <p>Coluna - 2</p>
            
            </section>
            
        </div>
        <nav class="navbar fixed-bottom navbar-light" style="background-color:CornflowerBlue">
            <a class="navbar-brand" href="#">© Lucas Santana</a>
        </nav>
</html>




