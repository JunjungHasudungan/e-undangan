<?php

use Livewire\Volt\Component;
use App\Models\Submission;

new class extends Component {
    public $userSubmission;

    public function mount() {
        $this->userSubmission = Submission::where('user_id', Auth::user()->id)->first();
    }
}; ?>

<div>
    {{ $userSubmission }}
</div>
