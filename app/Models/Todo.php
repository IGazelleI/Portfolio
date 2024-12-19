<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

    // Fillable
    protected $fillable = ['name', 'is_completed'];
    
    // Constructor
    public function __construct() {
        parent::__construct();
    }
}
