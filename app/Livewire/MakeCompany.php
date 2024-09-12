<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\Company;
use App\Models\Make_company;

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
        'members' => 'required|numeric|min:1', // Ensures it's a number
        'country' => 'required|string',
        'company_name' => 'required|string|max:255',
    ];

    public function createCompany()
    {
        $validatedData = $this->validate();

        Make_company::create([
            'user_id' => 1, // Assuming you want to link it to the authenticated user
            'description' => $this->description,
            'type' => $this->type,
            'members' => $this->members,
            'country' => $this->country,
            'company_name' => $this->company_name,
        ]);

        session()->flash('success', 'Company created successfully!');
        return redirect()->route('companies.index'); // Adjust to your route
    }

    public function render()
    {
        return view('livewire.make-company')->layout('components.layouts.welcome');
    }
}
