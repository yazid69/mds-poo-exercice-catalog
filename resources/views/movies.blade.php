<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>{{config('app.name')}}</title>
</head>

<body>
    <div class="container">
        <h2>Top 20 films</h2>

        @foreach ($movies as $movie)

        <div>
            <a href="/movies/{{ $movie->id }}">
                <table>
                    <tr>
                        <td>
                            <img class="list_image" src="{{$movie->poster }}" alt="{{ $movie->primaryTitle }}">
                        </td>
                    </tr>
                </table>
            </a>
        </div>
        @endforeach

    </div>
</body>

<style>
    .container {
        margin: auto;
        max-width: 900px;
    }
</style>

</html>