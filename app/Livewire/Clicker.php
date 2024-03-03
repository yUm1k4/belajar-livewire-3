<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $title = 'Clicker';

    public function render()
    {
        $users = User::all();

        return view('livewire.clicker', [
            'users' => $users
        ]);
    }

    public function createNewUser()
    {
        User::create([
            'name' => 'User ' . rand(1, 100),
            'email' => 'user' . rand(1, 100) . '@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}

