<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\View;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

#[Title('Todo List')]
class TodoList extends Component {

    // States
    public $todos;

    // Listeners
    protected $listeners = [
        'saved' => 'refresh',
        'deleted' => 'refresh'
    ];

    // Mount
    public function mount() {
        $this->todos = Todo::all();
    }

    // Render
    public function render() {
        return View::make('livewire.todo-list');
    }

    // Refresh
    public function refresh() {
        $this->todos = Todo::all();
    }

    // Add
    public function add() {

        // Add
        $this->todos->push(Todo::create([
            'name' => '',
            'is_completed' => FALSE,
            'user_id' => Auth::user()->id
        ]));
    }
}
