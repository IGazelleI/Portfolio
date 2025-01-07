<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post as PostM;
use Illuminate\Support\Facades\View;

class Post extends Component {

    // State
    public PostM $post;

    // Render
    public function render() {
        return View::make('livewire.post');
    }

    // Delete
    public function delete() {

        // Delete
        $this->post->delete();

        // Trigger event
        $this->dispatch('deleted');
    }
}
