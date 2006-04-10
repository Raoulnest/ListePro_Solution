<?php
    namespace App\Http\Controllers;
    use App\Http\Controllers\ProblemesController;
    use App\Models\Problemes;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                text-align: center;
            }
        </style>
    </head>
    <body class="antialiased">
       <h1>Page d'accueil</h1>

       {{$pro}}
     
       
       
        
       
    </body>
</html>