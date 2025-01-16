<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Submission;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $userSubmission;

    public function mount() {
        $this->userSubmission = Submission::where('user_id', Auth::user()->id)->first();
    }
    
    public function render()
    {
        return view('livewire.dashboard');
    }
}
