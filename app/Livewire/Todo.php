<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo as TodoM;
use Illuminate\Support\Facades\View;

class Todo extends Component {

    // State
    public TodoM $todo;
    public string $name;

    // Mount
    public function mount() {
        $this->name = $this->todo->name;
    }

    // Render
    public function render() {

        // Update
        $this->todo->update([
            'name' => $this->name
        ]);

        // Return
        return View::make('livewire.todo');
    }

    // Toggle
    public function toggle() {

        // Update
        $this->todo->update([
            'is_completed' => !$this->todo->is_completed
        ]);

        // Trigger event
        $this->dispatch('deleted');
    }

    // Delete
    public function delete() {

        // Delete
        $this->todo->delete();

        // Trigger event
        $this->dispatch('deleted');
    }
}
