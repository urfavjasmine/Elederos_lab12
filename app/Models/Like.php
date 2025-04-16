<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'post_id',
        'liker_id',
    ];

    public function like()
    {
        return $this->belongsTo(Blog::class, 'post_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'liker_id', 'id');
    }
}
