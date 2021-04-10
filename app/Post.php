<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'iframe','image', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->body,0,140);
    }

    // Pata get image mak php artisan 
    public function getGetImageAttribute()
    {
        if($this->image)
            return url("storage/$this->image");
    }
}