<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerTeam extends Model
{
    protected $table = 'team_players';
    protected $fillable = [
        'player_id',
        'team_id',
        'is_captain',
        'sort_order'
    ];
}
