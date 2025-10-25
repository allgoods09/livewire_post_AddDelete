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
        $this->dispatch('postUpdated');
    }

    public function unArchive()
    {
        $this->post->is_archived = false;
        $this->post->save();
        $this->dispatch('postUpdated');
    }

    public function delete()
    {
        $this->post->delete();
        $this->dispatch('postUpdated');
    }

    public function render()
    {
        return view('livewire.posts.table-rows');
    }


}
