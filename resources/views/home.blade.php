<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .container {
            margin: auto;
            max-width: 900px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ config('app.name') }}</h1>
        <h3><a href="{{ route('list.movies')}}"> Top 20 films</a></h3>

        <div class="wrapper">
            @foreach ($movies as $movie)
            <div>
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>