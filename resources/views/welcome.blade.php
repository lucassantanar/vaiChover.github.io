<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>vaiChover?</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">

        <?php

        $url = "https://api.hgbrasil.com/weather?format=JSON&key=3518af26";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($ch);
        $result = json_decode($data);
        $result1 = $result -> results;

        ?>

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


</html>



