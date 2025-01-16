<?php

namespace App\Livewire\User;
use App\Models\Submission;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $userSubmission = [];

    public function mount() {
        $this->userSubmission = Submission::where('user_id', Auth::user()->id)->first();

    }
    public function render()
    {
        return view('livewire.user.dashboard', [
            'userSubmission'    => $this->userSubmission,
        ]);
    }
}
