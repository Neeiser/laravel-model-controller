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
        <h1>Movies Showcase</h1>
        <div class="movie-container">
            @foreach ($movies as $movieItem)
                <div class="movie-card">
                    <h2>{{$movieItem->title}}</h2>
                    <small>{{$movieItem->original_title}}</small>
                    <span>{{$movieItem->nationality}}</span>
                    <time>{{$movieItem->date}}</time>
                    <var class="num">{{$movieItem->vote}} <span id="max-num">/ 10</span></var>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>