<?php

namespace App\backend\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model

{
    protected $fillable = [
        'title', 'body'
    ];
}