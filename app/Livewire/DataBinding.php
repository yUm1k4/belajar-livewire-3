<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

/**
 * Episode 4 - Data Binding
 */
class DataBinding extends Component
{
    public $title = 'Data Binding';

    // public property akan selalu tampil di snapshot html ataupun network dan ini jadi security concern
    public $name;
    public $email;
    public $password;

    public function render()
    {
        $users = User::all();

        return view('livewire.data-binding', [
            'users' => $users
        ]);
    }

    public function createNewUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
    }
}

