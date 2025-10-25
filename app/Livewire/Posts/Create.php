<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Posts;

class Create extends Component
{
    public $title = '';
    public $content = '';
    public $author = '';
    public $is_archived = false;

    protected $rules = [
        'title' => 'required|string|max:255|min:3',
        'content' => 'required|string|min:10',
        'author' => 'required|string|min:3',
        'is_archived' => 'boolean',
    ];

    protected $messages = [
        'title.required' => 'A title is required.',
        'title.min' => 'The title must be at least 3 characters.',
        'content.required' => 'Please write some content.',
        'content.min' => 'Content must be at least 10 characters.',
        'author.required' => 'Author name is required.',
        'author.min' => 'Author name must be at least 3 characters.',
    ];

    // 🔹 Live validation as you type
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        Posts::create([
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'is_archived' => $this->is_archived,
        ]);

        // Reset inputs
        $this->reset(['title', 'content', 'author', 'is_archived']);

        // Refreshes list and hides the form
        $this->dispatch('post-added');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
