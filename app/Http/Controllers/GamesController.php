<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(String $name){
        $games = [
            ['name' => 'Dota2', 'type' => 'MOBA', 'playtime' =>'211.3 hrs', 'id' => '1', 'description' => 'Dota 2 is a multiplayer game where two teams of five players battle to destroy each others base. Players select heroes with unique abilities and work together to level up and earn gold to buy items that enhance their abilities. The game is known for its depth and competitiveness.', 'Img' => 'Dota 2.jpg'],
            ['name' => 'Counter Strike: Global Offensive', 'type' => 'FPS', 'playtime' =>'261.1 hrs', 'id' => '2', 'description' => 'Counter-Strike: Global Offensive (CS:GO) is a first-person shooter game where two teams, Terrorists and Counter-Terrorists, compete in objective-based game modes. Players can choose from a variety of weapons and equipment, with gameplay focused on tactical coordination and skill. The game has a ranked matchmaking system and a thriving esports scene, known for its fast-paced action and strategic depth.', 'Img' => 'CSGO.jpg'],
            ['name' => 'Rainbow Six Siege', 'type' => 'FPS', 'playtime' =>'37.6 hrs', 'id' => '3', 'description' => 'Rainbow Six Siege is a tactical first-person shooter game where two teams, Attackers and Defenders, compete in objective-based game modes. Players choose from Operators with unique gadgets, weapons, and abilities. The game focus on destructibility allows for creative strategies. Rainbow Six Siege has a ranked matchmaking system and a strong esports scene, known for its intense, strategic gameplay.', 'Img' => 'R6.jpg'],
            ['name' => 'Apex Legends', 'type' => 'Battle Royal', 'playtime' =>'26.2 hrs', 'id' => '4', 'description' => 'Apex Legends is a free-to-play battle royale game where up to 20 three-player squads compete to be the last team standing. Players choose from a roster of Legends with unique abilities and fast-paced, team-based gameplay. The game has a unique respawn system and a progression system for cosmetic items. Apex Legends is known for its engaging teamwork mechanics and has become a popular battle royale game.', 'Img' => 'Apex Legends.jpg']
        ];
        return view('data.games', compact('games'));
    }

    public function show(String $id){
        $games = [
            ['name' => 'Dota2', 'type' => 'MOBA', 'playtime' =>'211.3 hrs', 'id' => '1', 'description' => 'Dota 2 is a multiplayer game where two teams of five players battle to destroy each others base. Players select heroes with unique abilities and work together to level up and earn gold to buy items that enhance their abilities. The game is known for its depth and competitiveness.', 'Img' => 'Dota 2.jpg'],
            ['name' => 'Counter Strike: Global Offensive', 'type' => 'FPS', 'playtime' =>'261.1 hrs', 'id' => '2', 'description' => 'Counter-Strike: Global Offensive (CS:GO) is a first-person shooter game where two teams, Terrorists and Counter-Terrorists, compete in objective-based game modes. Players can choose from a variety of weapons and equipment, with gameplay focused on tactical coordination and skill. The game has a ranked matchmaking system and a thriving esports scene, known for its fast-paced action and strategic depth.', 'Img' => 'CSGO.jpg'],
            ['name' => 'Rainbow Six Siege', 'type' => 'FPS', 'playtime' =>'37.6 hrs', 'id' => '3', 'description' => 'Rainbow Six Siege is a tactical first-person shooter game where two teams, Attackers and Defenders, compete in objective-based game modes. Players choose from Operators with unique gadgets, weapons, and abilities. The game focus on destructibility allows for creative strategies. Rainbow Six Siege has a ranked matchmaking system and a strong esports scene, known for its intense, strategic gameplay.', 'Img' => 'R6.jpg'],
            ['name' => 'Apex Legends', 'type' => 'Battle Royal', 'playtime' =>'26.2 hrs', 'id' => '4', 'description' => 'Apex Legends is a free-to-play battle royale game where up to 20 three-player squads compete to be the last team standing. Players choose from a roster of Legends with unique abilities and fast-paced, team-based gameplay. The game has a unique respawn system and a progression system for cosmetic items. Apex Legends is known for its engaging teamwork mechanics and has become a popular battle royale game.', 'Img' => 'Apex Legends.jpg']
        ];
        return view('data.description', compact('games', 'id'));
    }
}
