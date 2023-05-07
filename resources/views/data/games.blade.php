<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
    <link rel="stylesheet" href="css/games.css">
</head>
<body>
    <div class="box-luar">
        <div class="box-judul">
            <div class="judul">Welcome to My Games Pages</div>
        </div>

        <div class="box-list-games">
            @foreach ($games as $game)
                @if ($game['type'] == "MOBA")
                    <a href="description/{{ $game['id'] }}" class="MOBA">
                        <div class="list-games">
                            <h5 class="Games Name">{{ $game['name'] }}</h5>
                            <p class="Games Type">{{ $game['type'] }}</p>
                            <p class="Games Playtime">{{ $game['playtime'] }}</p>
                        </div>
                    </a>
                @elseif ($game['type'] == "FPS")
                <a href="description/{{ $game['id'] }}" class="FPS">
                    <div class="list-games">
                        <h5 class="Games Name">{{ $game['name'] }}</h5>
                        <p class="Games Type">{{ $game['type'] }}</p>
                        <p class="Games Playtime">{{ $game['playtime'] }}</p>
                    </div>
                </a>
                @else
                <a href="description/{{ $game['id'] }}" class="Battle Royal">
                    <div class="list-games">
                        <h5 class="Games Name">{{ $game['name'] }}</h5>
                        <p class="Games Type">{{ $game['type'] }}</p>
                        <p class="Games Playtime">{{ $game['playtime'] }}</p>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</body>
</html>
