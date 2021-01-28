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

        $url = 'https://api.hgbrasil.com/weather';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'key=3518af26&city_name=Campinas');
        $data = curl_exec($ch);
        $result = json_decode($data);
        $result1 = $result -> results;


        ?>

            
    </body>

</html>



