<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main>
        <div class="movie-container">
            @foreach ($movies as $movieItem)
                <div class="movie-card">
                    <p>{{$movieItem->title}}</p>
                    <p>{{$movieItem->original_title}}</p>
                    <p>{{$movieItem->nationality}}</p>
                    <p>{{$movieItem->date}}</p>
                    <p>{{$movieItem->vote}}</p>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>