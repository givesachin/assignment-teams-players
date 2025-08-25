<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    
    protected $fillable = [
        'name',
        'email',
        'dob',
        'is_active',
        'font_color',
        'bg_color'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_players');
    }
}
