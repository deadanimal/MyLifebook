<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Profile extends Model
{
    use HasFactory, HasUUID;

    protected $fillable = [ 
        'username',
        'uuid',
        'user_id',
    ];    
    
    protected $hidden = [
        'id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }      
}
