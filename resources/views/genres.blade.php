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

        @foreach ($genres as $genre)

        <tr>
            <a href="/movies?genre={{$genre->label}}">
                <h3>{{$genre->label}}

                </h3>
            </a>
            @endforeach
        </tr>

        $genre->links('paginator')}}


    </div>
</body>

<style>

</style>

</html>