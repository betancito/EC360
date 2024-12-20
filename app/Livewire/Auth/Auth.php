<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth as Authtentication;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class Auth extends Component
{
    public $name, $email, $password, $r_password, $password_confirmation;

    public function login()
    {

        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Authtentication::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'Invalid email or password');
            return redirect()->back();
        }
    }

    public function register()
    {


        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'r_password' => 'required|string|min:8|same:password_confirmation',
            'password_confirmation' => 'required|string|min:8',
        ]);

        $user = new User();

        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->r_password);

        event(new Registered($user));

        $user->save();

        Authtentication::login($user);

        return redirect()->route('dashboard');

    }

    public function render()
    {
        return view('livewire.auth.auth')->layout('layouts.guest');
    }
}
