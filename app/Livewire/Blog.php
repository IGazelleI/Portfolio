<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\View;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

#[Title('Blog')]
class Blog extends Component {

    // States
    public string $on_mind = '';
    public $posts = [];

    // Listeners
    protected $listeners = [
        'deleted' => 'refresh'
    ];

    // Mount
    public function mount() {
        $this->refresh();
    }

    // Refresh
    public function refresh() {
        $this->posts = Post::all();
    }

    // Render
    public function render() {
        return View::make('livewire.blog');
    }

    // Post
    public function post() {

        // Set
        Post::create([
            'content' => $this->on_mind,
            'user_id' => Auth::user()->id
        ]);

        // Refresh
        $this->refresh();
    }
}
