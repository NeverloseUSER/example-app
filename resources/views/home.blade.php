<?php
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Хоумлендер сайт</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
<img src="{{asset('image/pumpkin.webp')}}" alt="">
<a>Картинка- </a>
<div class="container">

    <div class="style">
        <a href="" class="underline">
            {{ $nameone }}
        </a>
        <br>{{ $descriptionone }}
    </div>
    <div class="style">
        <a href="" class="underline">
            {{ $nametwo }}
        </a>
        <br>{{ $descriptiontwo }}
    </div>
    <div class="style">
        <a href="" class="underline">
            {{ $namethree}}
        </a>
        <br> {{ $descriptionthree }}
    </div>
    <div class="style">
        <a href="" class="underline">
            {{ $namefour }}
        </a>
        <br>{{ $descriptionfour }}
    </div>
</div>
</body>
</html>
