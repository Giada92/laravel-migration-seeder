<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <h1>Scoprite le nostra mete!</h1>
            <div class="cards">
                @foreach ($query as $item)
                    <div class="card">
                        <h1>{{ $item->destination }}</h1>
                        <p><strong>Periodo</strong>: {{ $item->period }}</p>
                        <h4><strong>Costo a persona</strong>: {{ $item->price }}.00 €</h4>
                        <p>{{ $item->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
