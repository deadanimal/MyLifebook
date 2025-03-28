<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class PersonDocument extends Model
{
    use HasFactory, HasUUID;

    protected $fillable = [
        'title',
        'raw',
        'url',
        'profile_id',
        'uuid',
    ];       
}
