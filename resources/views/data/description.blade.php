<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
    <link rel="stylesheet" href="css/description.css">
</head>
<body>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.box-luar{
    height: 50.8vw;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-left: 3vw;
    padding-right: 3vw;
    gap: 5vw;
    background-color: #1d1d1d;
    /* border: red solid; */
}

.box-gambar{
    height: 19vw;
    width: 20vw;
    margin-top: 2.5vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-radius: 3vw;
    border: #4a656b solid;
}

.games-image{
    width: 18vw;
    height: 16vw;
}

.box-description{
    height: 20vw;
    width: 40vw;
    display: flex;
    flex-direction: column;
    gap: 1vw;
    padding-top: 2vw;
    padding-left: 2vw;
    padding-right: 2vw;
    border-radius: 4vw;
    border: cyan solid;
}

.GameName, .GameType, .Playtime, .GameDescription{
    color: white;
    font-size: 1vw;
    font-family:Arial, Helvetica, sans-serif;
}


</style>
    <div class="box-luar">
        @foreach ($games as $game)

            @if ($game['id'] == $id)
            <div class="box-gambar">
                <img class="games-img" src="{{ asset('img/' .$game['Img']) }}">
            </div>

            <div class="box-description">
                <p class="GameName">Game Name: {{ $game['name'] }}</p>
                <p class="GameType">Game Type: {{ $game['type'] }}</p>
                <p class="Playtime">Playtime: {{ $game['playtime'] }}</p>
                <p class="GameDescription">Game Description: {{ $game['description'] }}</p>
            </div>
            @endif
        @endforeach
    </div>
</body>
</html>
