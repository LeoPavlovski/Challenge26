<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year_of_foundation',
        'team_1',
        'team_2'
    ];
    public function matchesAsTeam1()
    {
        return $this->hasMany(Game::class, 'team_1');
    }
    public function matchesAsTeam2()
    {
        return $this->hasMany(Game::class, 'team_2');
    }
}
