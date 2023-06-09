<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillabe = [
      'team_1',
      'team_2',
       'score',
        'date'
    ];

   public function team1 (){
       return $this->belongsTo(Team::class, 'team_1');
   }
   public function team2(){
       return $this->belongsTo(Team::class, 'team_2');
   }
   public function players()
   {
       return $this->belongsToMany(Player::class, 'match_player', 'match_id', 'player_id');
   }
}
