<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Posts;

class Table extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Posts::all();
    }

    public function render()
    {
        return view('livewire.posts.table');
    }
}
