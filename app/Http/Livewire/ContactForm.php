<?php

namespace App\Http\Livewire;

use App\Contact;
use App\Mail\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $first_name;
    public $surname;
    public $email;
    public $phone;
    public $message;

    public function store()
    {
        // Validate Form Request
        $data = $this->validate([
            'first_name' => ['required'],
            'surname' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ]);

        // Create Contact in the Database
        Contact::create(
            array_merge(
                $data,
                ['ip_address' => request()->ip()]
            )
        );

        // Get newest Entry
        $contact = Contact::latest()->first();

        // Send Mail
        Mail::to(['info@herzundhand24.de'])
            ->send(new ContactRequest($contact));

        // Print Message
        session()->flash('success', '... Gesendet!');

        // Reset Form
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
