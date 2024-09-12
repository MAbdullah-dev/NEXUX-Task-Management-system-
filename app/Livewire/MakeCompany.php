<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\Make_company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MakeCompany extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $description;
    public $type;
    public $members;
    public $country;
    public $company_name;

    public $types = ['small', 'medium', 'large'];

     protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'description' => 'nullable|string',
        'type' => 'required',
        'members' => 'required|numeric|min:1',
        'country' => 'required|string',
        'company_name' => 'required|string|max:255',
    ];


    public function createCompany()
    {
        // First, validate the data
        $validatedData = $this->validate();

        // Create a new user in the users table
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), // Hashing the password
            'role_id' => 2, // Assuming 2 is the role ID for a company user
        ]);

        // Create the associated company in the companies table
        Make_company::create([
            'user_id' => $user->id, // Link the company to the newly created user
            'description' => $this->description,
            'type' => $this->type,
            'members' => $this->members,
            'country' => $this->country,
            'company_name' => $this->company_name,
        ]);

        // Flash a success message and redirect
        session()->flash('success', 'Company and user created successfully!');
        return redirect()->route('dashboard'); // Adjust the route as necessary
    }

    public function render()
    {
        return view('livewire.make-company')->layout('components.layouts.welcome');
    }
}
