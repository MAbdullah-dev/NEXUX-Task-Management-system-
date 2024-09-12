<?php

namespace App\Livewire\Modal;

use App\Models\Team;
use Livewire\Component;

class CreateTeam extends Component
{
    public $name;
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255|unique:teams',
        'description' => 'required|string',
    ];

    public function createTeam()
    {
        // Validate form input
        $this->validate();

        // Create a new team
        Team::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        // Reset form fields after successful submission
        $this->reset(['name', 'description']);

        // Dispatch the event to close the modal
        $this->dispatch('teamCreated');
    }

    public function render()
    {
        return view('livewire.modal.create-team');
    }
}
