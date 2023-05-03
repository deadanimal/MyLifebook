<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'raw_message',
        'raw_audio_url',

        'from_bot',
        'chat_type',

        'profile_id',
        'uuid',
    ];        
}
