<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;

#[Title('Login')]

class AuthComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $signinemail;
    public $signinpassword;
    public $password_confirmation;
    public $role_id;
    public $roles;
    public bool $signedup = false;

    public function mount() {
        $this->roles = Role::all();
    }

    protected $rulesRegister = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8',
        'password_confirmation' => 'required|min:8',
        'role_id' => 'required|exists:roles,id',
    ];

    protected $rulesLogin = [
        'signinemail' => 'required|email',
        'signinpassword' => 'required',
    ];

    public function register()
    {
        $this->validate($this->rulesRegister);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => $this->role_id,
        ]);
        if ($user != null) {
            $this->signedup = !$this->signedup;
        }
    }

    public function login()
    {
        $this->validate($this->rulesLogin);

        if (Auth::attempt(['email' => $this->signinemail, 'password' => $this->signinpassword])) {
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'Invalid credentials');
        }
    }

    public function render()
    {
        return view('livewire.auth-component')->layout('components.layouts.welcome');
    }
}
