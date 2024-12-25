<x-app-layout>
    <title> Dashboard | {{ config('app.name') }} </title>
@php
    $user = \App\Models\User::with(['submissions'])->where('id', auth()->user()->id)->first();
    $submission = $user->submissions ?? [];
@endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- start step-indicator --}}
                    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
                    <livewire:invitation.submission.step-indicator />
                    </div>
                    {{-- end step-indicator --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
