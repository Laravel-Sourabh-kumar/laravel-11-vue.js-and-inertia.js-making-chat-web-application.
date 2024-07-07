<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Chat;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['attachments', 'content', 'user_id', 'is_typing'];
    protected $casts = [
        'attachments' => 'array'
    ];
    
    public function chat(): BelongsTo
    {
        return $this->belognsTo(Chat::class);
    }
    public function user(): BelongsTo
    {
        return $this->belognsTo(User::class);
    }
}
