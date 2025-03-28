<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title',
        'record_type',
        'status',
        'raw_url',
        'profile_id',
        'uuid'
    ];      

    protected $hidden = [
        'id',
        'profile_id',
    ];
    
    
}
