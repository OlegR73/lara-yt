<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hashtag extends Model
{
    use HasFactory;
    public $timeatamps = false;

    public function posts()
    {
       return $this->belongsToMany(Post::class,'hashtag_post','hashtag_id','post_id','');
    }
}
