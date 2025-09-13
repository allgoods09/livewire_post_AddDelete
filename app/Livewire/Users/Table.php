<?php

namespace App\Livewire\Users;


use Livewire\Component;
use App\Models\User;

class Table extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::limit(20)->get();
    }
    public function render()
    {
        return view('livewire.user.table');
    }
}
