<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Posts;

class TableRows extends Component
{   
    public Posts $post;

    public function archive()
    {
        $this->post->is_archived = true;
        $this->post->save();
    }

    public function unArchive()
    {
        $this->post->is_archived = false;
        $this->post->save();
    }

    public function render()
    {
        return view('livewire.posts.table-rows');
    }


}
