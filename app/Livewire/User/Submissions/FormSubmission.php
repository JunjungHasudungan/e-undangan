<?php

namespace App\Livewire\User\Submissions;

use Livewire\Component;
use App\Helper\Category;

class FormSubmission extends Component
{
    public $userId, $username, $email, $phoneNumber, $eventType, $eventDate, $status;
    public $openModal = false;

    public function openModalForm() {
        return $this->openModal = true;
    }


    public function cancelSubmit() {
        if ( $this->username == "" &&
            $this->email == "" &&
            $this->phoneNumber == "" &&
            $this->eventType == "" &&
            $this->eventDate == "") {
           return $this->openModal = false;
        }
    }

    public function sendSubmission() {
        $this->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phoneNumber' => ['required', 'number', 'max:255'],
            'eventType' => ['required', 'string'],
            'eventDate' => ['required', 'string'],
        ],[
            'username.required' => 'Nama user wajib diisi..',
            'email.required' => 'Alamat email user wajib diisi..',
            'phoneNumber.required' => 'Nomor kontak user wajib diisi..',
            'eventType.required' => 'Kategori acara wajib dipilih..',
            'eventDate.required' => 'Tanggal acara user wajib dipilih..',
            

        ]);
    }

    public function render()
    {
        return view('livewire.user.submissions.form-submission', [
            'categories'    => Category::categories,
        ]);
    }
}
