<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    // Fillables
    protected $fillable = ['content', 'user_id'];
}
