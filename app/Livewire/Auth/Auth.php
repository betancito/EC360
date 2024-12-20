<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Auth extends Component
{
    public $email, $password;

    public function login()
    {

        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {

            $user = Auth::user();

            if ($user->profile_incomplete) {
                return redirect()->route('user.edit', ['id' => $user->id]);
            }

            return redirect()->route('user.index');
        } else {
            session()->flash('error', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.auth.auth')->layout('layouts.guest');
    }
}
