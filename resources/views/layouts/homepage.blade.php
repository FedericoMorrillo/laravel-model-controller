<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header class="d-flex justify-content-center py-3">
         <h1>Laravel Model Controller</h1>
    </header>
    
    <div class="container mt-5 d-flex flex-wrap">
        @foreach ($movies as $movie )
        <!--card-->
        <div class="card p-2">
            <h4>{{$movie['title']}}</h4>
            <div>
                <div class="my-2">
                   <span> <strong>nationality:</strong> </span> {{$movie['nationality']}}
                </div>
                <div class="my-2">
                    <span><strong>Pubblicazione:</strong></span>{{$movie['date']}}
                </div>
                <div>
                   <span><strong>Voto</strong></span> {{$movie['vote']}}
                </div>
            </div>
        </div>
        <!--/card-->
@endforeach
    </div>

</body>
</html>