<?php

namespace mymusics;

use Illuminate\Database\Eloquent\Model;

class StyleMusic extends Model
{   
    
    protected $table = 'style_musics';

    protected $fillable = [
        'id','type'
    ];

    protected $sorted = [
        'id', 'type'
    ];

    protected $guarded = [
        'id', 'create_at', 'update_at'
    ];

    protected $hidden = [
        'id', 'create_at', 'update_at'
    ];
}
