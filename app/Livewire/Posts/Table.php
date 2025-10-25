<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Posts;

class Table extends Component
{   
    protected $listeners = ['post-added' => 'refreshPosts', 'postUpdated' => 'refreshPost', 'cancelCreate' => 'hideCreate'];

    public $posts;

    public $showForm = false;

    public function mount()
    {
        $this->posts = Posts::all();
    }

    public function refreshPosts()
    {
        $this->posts = Posts::orderBy('id', 'asc')->get();
        $this->showForm = false;
    }

    public function hideCreate()
    {
        $this->showForm = false;
    }

    public function render()
    {
        return view('livewire.posts.table');
    }
}
