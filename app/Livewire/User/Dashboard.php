<?php

namespace App\Livewire\User;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard')->layout('layouts.app');
    }
}
