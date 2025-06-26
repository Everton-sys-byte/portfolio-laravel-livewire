<?php

namespace App\Livewire\Form;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name, $email, $message;

    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|email',
        'message' => 'required|min:5'
    ];

    public function updated($campo)
    {
        $this->validateOnly($campo);
    }

    public function submit()
    {
        $this->validate($this->rules);
        
        Mail::to('everton_dev@hotmail.com')->queue(new ContactFormMail($this->name, $this->email, $this->message));
        $this->reset(['name', 'email', 'message']);
                
        // dispara um evento no browser
        $this->dispatch('show-toast', [
            'icon' => 'success',
            'title' => 'Sucesso',
            'message' => 'Email enviado com sucesso!'
        ]);
    }

    public function render()
    {
        return view('livewire.form.contact');
    }
}
