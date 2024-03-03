<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

/**
 * Episode 5 - Validation
 */
class LearnValidation extends Component
{
    public $title = 'Validation';

    #[Rule('required|min:6|max:50')]
    public $name;

    #[Rule('required|email|unique:users,email')]
    public $email;

    #[Rule('required|min:6|max:50')]
    public $password;

    public function render()
    {
        $users = User::all();

        return view('livewire.learn.validation', [
            'users' => $users
        ]);
    }

    public function createNewUser()
    {
        $this->validate();

//        $this->validate([
//            'name' => 'required|min:6|max:50',
//            'email' => 'required|email|unique:users,email',
//            'password' => 'required|min:6'
//        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
    }
}

