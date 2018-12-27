<?php

namespace mymusics;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{   
    protected $table = 'singers';
    
    protected $fillable = [
        'name', 'nickname', 'gender', 'type', 'style_music_id'
    ];

    protected $sorted = [
        'nickname', 'name', 'type', 'gender', 'style_music_id'
    ];

    protected $guarded = [
        'id', 'create_at', 'update_at'
    ];

    protected $hidden = [
        'id', 'create_at', 'update_at'
    ];
}
