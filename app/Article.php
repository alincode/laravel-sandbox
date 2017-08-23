<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user()
    {
        // 應被放置在...
        return $this->belongsTo('App\User');
    }
}
