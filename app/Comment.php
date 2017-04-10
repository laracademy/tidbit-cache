<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
        'content',
    ];

    // relationships

    public function user()
    {
        return $this->hasOne(\App\User::class, 'id', 'user_id');
    }
}
