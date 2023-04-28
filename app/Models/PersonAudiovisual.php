<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class PersonAudiovisual extends Model
{
    use HasFactory, HasUUID;

    protected $fillable = [
        'title',
        'url',
        'profile_id',
        'uuid',
    ];    
}
