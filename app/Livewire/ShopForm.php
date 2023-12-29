<?php

namespace App\Livewire;

use Livewire\Component;

class ShopForm extends Component
{


    public $name;
    public $email;
    public $body;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        // Contact::create($validatedData);

        // return redirect()->to('/contact-form');
    }



    public function render()
    {
        return view('livewire.shop-form')->layout('layouts.base');
    }
}
