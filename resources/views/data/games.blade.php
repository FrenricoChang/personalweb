<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyGames</title>
    <link rel="stylesheet" href="css/games.css">
</head>
<body>
    <div class="box-luar">
        <div class="box-judul">
            <div class="judul">Welcome <br>to<br> My Games Pages</div>
        </div>

        <div class="box-list-games">
            @foreach ($games as $game)
                @if ($game['type'] == "MOBA")
                    <a href="description/{{ $game['id'] }}" class="MOBA">
                        <div class="list-games">
                            <div class="box-gambar">
                                <img class="games-img" src="{{ asset('img/' .$game['Img']) }}">
                            </div>
                            <h5 class="GamesName">{{ $game['name'] }}</h5>
                            <p class="GamesType">{{ $game['type'] }}</p>
                            <p class="GamesPlaytime">{{ $game['playtime'] }}</p>
                        </div>
                    </a>
                @elseif ($game['type'] == "FPS")
                <a href="description/{{ $game['id'] }}" class="FPS">
                    <div class="list-games">
                        <div class="box-gambar">
                            <img class="games-img" src="{{ asset('img/' .$game['Img']) }}">
                        </div>
                        <h5 class="GamesName">{{ $game['name'] }}</h5>
                        <p class="GamesType">{{ $game['type'] }}</p>
                        <p class="GamesPlaytime">{{ $game['playtime'] }}</p>
                    </div>
                </a>
                @else
                <a href="description/{{ $game['id'] }}" class="Battle Royale">
                    <div class="list-games">
                        <div class="box-gambar">
                            <img class="games-img" src="{{ asset('img/' .$game['Img']) }}">
                        </div>
                        <h5 class="GamesName">{{ $game['name'] }}</h5>
                        <p class="GamesType">{{ $game['type'] }}</p>
                        <p class="GamesPlaytime">{{ $game['playtime'] }}</p>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</body>
</html>
