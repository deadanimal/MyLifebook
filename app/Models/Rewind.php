<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewind extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title',
        'profile_id',
    ];        
}
