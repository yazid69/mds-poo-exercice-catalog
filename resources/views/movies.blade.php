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

        <a href="/movies?order_by=startYear&order=asc">
            <h3>Newest Movies</h3>
        </a>

        <a href="/movies?order_by=averageRating&order=desc">
            <h3>Best Rated Movies</h3>
        </a>
        @foreach ($movies as $movie)

        <div>
            <a href="/movies/{{ $movie->id }}">
                <table>
                    <tr>
                        <td>
                            <img class="list_image" src="{{$movie->poster }}" alt="{{ $movie->primaryTitle }}">
                        </td>
                        <h2>
                            <td>{{$movie->originalTitle}}</td>
                            <td>{{ $movie->averageRating}}/10</td>
                            <td>Date de sortie : {{$movie->startYear}}</td>
                        </h2>
                    </tr>
                </table>
            </a>
        </div>
        @endforeach


        {{ $movies->appends(request()->query())->links() }}
    </div>
</body>

<style>
    .container {
        margin: auto;
        max-width: 900px;
    }

    .pagination {
        display: inline-block;
        display: flex;
        list-style: none;
        margin: auto;
        justify-content: center;
        border: 1px solid #ddd;
        border-radius: 5px;


    }

    .pagination li {
        margin: 5px;
    }
</style>

</html>