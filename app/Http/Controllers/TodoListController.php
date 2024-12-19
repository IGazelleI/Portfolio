<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class TodoListController extends Controller {

    // Page
    public function index() {
        return View::make('todo-list');
    }
}
