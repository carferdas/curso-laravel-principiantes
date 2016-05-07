<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    protected $fillable = ['category_id', 'user_id', 'title', 'body', 'resolved'];
}
