<div>
    <ol class="flex items-center">
        <li class="relative w-full mb-6">
            @if (!$userSubmission)
                <div class="flex items-center">
                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <span class="flex w-3 h-3 bg-blue-600 rounded-full"></span>
                    </div>
                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
            @endif

            @if ($userSubmission)
                <div class="flex items-center">
                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <svg class="w-2.5 h-2.5 text-blue-100 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </div>
                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
            @endif
            <div class="mt-3">
                <h3 class="font-medium text-gray-900 dark:text-white">Pengajuan</h3>
            </div>
        </li>
        <li class="relative w-full mb-6">
            @if (!$userSubmission)
                <div class="flex items-center">
                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <span class="flex w-3 h-3 bg-blue-600 rounded-full"></span>
                    </div>
                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
            @endif

            @if ($userSubmission)
                <div class="flex items-center">
                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <svg class="w-2.5 h-2.5 text-blue-100 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </div>
                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
            @endif
            
            <div class="mt-3">
                <h3 class="font-medium text-gray-900 dark:text-white">Konfirmasi Data</h3>
            </div>
        </li>
        <li class="relative w-full mb-6">
            @if (!$userSubmission)
                <div class="flex items-center">
                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <span class="flex w-3 h-3 bg-blue-600 rounded-full"></span>
                    </div>
                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
            @endif

            @if ($userSubmission)
                <div class="flex items-center">
                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <svg class="w-2.5 h-2.5 text-blue-100 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </div>
                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
            @endif
            <div class="mt-3">
                <h3 class="font-medium text-gray-900 dark:text-white">Desin Undangan</h3>
            </div>
        </li>
        <li class="relative w-full mb-6">
            <div class="flex items-center">
                <div class="z-10 flex items-center justify-center w-6 h-6 bg-gray-200 rounded-full ring-0 ring-white dark:bg-gray-700 sm:ring-8 dark:ring-gray-900 shrink-0">
                    <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="font-medium text-gray-900 dark:text-white">Selesai</h3>
            </div>
        </li>
    </ol>
</div>
