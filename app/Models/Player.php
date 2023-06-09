<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
        'surname',
        'date_of_birth',
        'team_id'
    ];
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function matches()
    {
        return $this->belongsToMany(Game::class, 'match_player', 'player_id', 'match_id');
    }
}
