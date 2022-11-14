<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <title>{{ $movie ->primaryTitle }}</title>

    <style>
        .container {
            display: flex;
            margin-left: 5px;
            margin-right: 5px;
            width: 100%;
        }
    </style>

</head>

<body>

    <a>Mon film numéro : {{$movie->id}}</a>
    <h1>{{ $movie->primaryTitle}}</h1>
    <div class="container">
        <div>
            <img src="{{ $movie->poster}}" alt="{{ $movie ->primaryTitle}}">
        </div>


        <tr>
            <td>
                <h2>{{ $movie->originalTitle }}</h2>
            </td>
        </tr>
        <h3>Date de sortie : {{$movie->startYear}}</h3>
        <h3>Durée du film : {{ $movie->runtimeMinutes }} minutes.</h3>
        <h3>{{ $movie ->plot }}</h3>
        <h3>Note sur 20 : {{ $movie->averageRating}}</h3>
        <h3>Nombres de votes : {{ $movie ->numVotes}}</h3>
    </div>

</body>

</html>