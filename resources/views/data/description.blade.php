<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="box-luar">
        @foreach ($games as $game)
            @if ($game['id'] == $id)
            <div class="box-gambar">
                <img class="games-img" src="{{ asset('img/' .$game['Img']) }}">
            </div>

            <div class="box-description">
                <p>Game Name: {{ $game['name'] }}</p>
                <p>Game Type: {{ $game['type'] }}</p>
                <p>Playtime: {{ $game['playtime'] }}</p>
                <p>Game Description: {{ $game['description'] }}</p>
            </div>
            @endif
        @endforeach
    </div>
</body>
</html>
