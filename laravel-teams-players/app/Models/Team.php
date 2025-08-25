<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    
    protected $fillable = [
        'name',
        'state',
        'country',
        'is_active',
        'font_color',
        'bg_color'
    ];

    public function players()
    {
        return $this->belongsToMany(Player::class, 'team_players')
            ->withPivot('is_captain', 'sort_order')
            ->orderBy('sort_order');
    }
}
