<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

    // Fillable
    protected $fillable = ['name', 'is_completed', 'user_id'];
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
}
