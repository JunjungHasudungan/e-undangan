<div>
    @if ($userSubmission)
        <livewire:user.submissions.step-indicator />
    @endif

    {{-- form submission --}}
    <livewire:user.submissions.form-submission />
</div>
