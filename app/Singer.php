<?php

namespace mymusics;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = [
        'name', 'nickname', 'gender', 'type'
    ];

    protected $sorted = [
        'nickname', 'name', 'type', 'gender'
    ];

    protected $guarded = [
        'id', 'create_at', 'update_at'
    ];

    protected $hidden = [
        'id', 'create_at', 'update_at'
    ];
}
