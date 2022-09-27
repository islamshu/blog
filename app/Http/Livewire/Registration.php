<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserNew;

class Registration extends Component
{
    public $currentSection = 1;
    public $name, $username, $birthPlace, $birthDate, $status, $email, $phone;
    public $successMessage;

    public function step1()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'status' => 'required'
        ]);

        $this->currentSection = 2;
    }
    public function step2()
    {
        $validatedData = $this->validate([
            'email' => 'required|unique:users,email',
            'phone' => 'required|numeric'
        ]);

        $this->currentSection = 3;
    }
    public function step3()
    {
        UserNew::create([
            'name' => $this->name,
            'username' => $this->username,
            'birthPlace' => $this->birthPlace,
            'birthDate' => $this->birthDate,
            'status' => $this->status,
            'email' => $this->email,
            'phone' => $this->phone
        ]);

        $this->successMessage = "You've been registered";

        $this->clearForm();

        $this->currentSection = 1;
    }
    public function back($section)
    {
        $this->currentSection = $section;
    }
    public function clearForm()
    {
        $this->name = "";
        $this->username = "";
        $this->birhtPlace = "";
        $this->birthDate = "";
        $this->status = "";
        $this->email = "";
        $this->phone = "";
    }

    public function render()
    {
        return view('livewire.registration');
    }
}