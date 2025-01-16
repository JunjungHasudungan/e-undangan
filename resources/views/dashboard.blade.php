<x-app-layout>
    <title> Dashboard | {{ config('app.name') }} </title>
    <div class="py-12" id="vue-app">
        {{-- <livewire:pages.user.dashboard /> --}}
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div v-if="userSubmission"
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">

                        <livewire:user.dashboard />
                        {{-- <ol class="flex items-center">
                            <li class="relative w-full mb-6">
                                <div class="flex items-center">
                                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <svg class="w-2.5 h-2.5 text-blue-100 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                        </svg>
                                    </div>
                                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="font-medium text-gray-900 dark:text-white">Step 1</h3>
                                </div>
                            </li>
                            <li class="relative w-full mb-6">
                                <div class="flex items-center">
                                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <svg class="w-2.5 h-2.5 text-blue-100 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                        </svg>
                                    </div>
                                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="font-medium text-gray-900 dark:text-white">Step 2</h3>
                                </div>
                            </li>
                            <li class="relative w-full mb-6">
                                <div class="flex items-center">
                                    <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <svg class="w-2.5 h-2.5 text-blue-100 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                        </svg>
                                    </div>
                                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="font-medium text-gray-900 dark:text-white">Step 2</h3>
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
                                    <h3 class="font-medium text-gray-900 dark:text-white">Step 3</h3>
                                </div>
                            </li>
                        </ol> --}}
                    </div>
                </div>
            </div>

            {{-- <div  class="max-w-4xl mx-auto p-2 sm:p-4 lg:p-6">
                <div v-if="isOpenFormSubmission == false">
                    <button
                        @click="formSubmission"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        Buat Pengajuan
                    </button>
                </div>
                    <div v-if="isOpenFormSubmission == true" class="relative bg-white mt-2 rounded-lg shadow dark:bg-gray-700">
                        <form  @submit.prevent="sendSubmission" class="p-4 md:p-5">
                            <div class="grid gap-4 mb-4 grid-cols-2">

                                <div class="col-span-2 sm:col-span-1">
                                    <label
                                        for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                    <input
                                    type="text"
                                    v-model="username"
                                    id="username"
                                    placeholder="Type your name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                  />
                                </div>

                                 <div class="col-span-2 sm:col-span-1">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input
                                    type="email"
                                    v-model="email"
                                    id="email"
                                    placeholder="Type your email address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                  />
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Kontak</label>
                                    <input
                                    type="text"
                                    v-model="phoneNumber"
                                    id="phone"
                                    placeholder="123-456-7890"
                                    aria-describedby="helper-text-explanation"
                                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                  />
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                    <select v-model="eventType" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option disabled selected="">Select category</option>
                                        <option v-for="category in categoryEvent" :key="category" :value="category"> @{{category}} </option>
                                    </select>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Acara</label>
                                    <input
                                        type="date"
                                        v-model="selectedDate"
                                        id="date"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    />
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu Acara</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    type="button" @click="sendSubmission"
                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Kirim
                                </button>

                                <button
                                    @click="closeFormCreateSubmission"
                                    class="text-white inline-flex items-center bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
