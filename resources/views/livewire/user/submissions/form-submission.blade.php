<div x-data="openModal">
    <button 
        x-show="!isOpen" 
        x-cloak
        x-on:click="openModalSubmission"
        type="button" 
        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
        Buat Pengajuan
    </button>


    <div 
        x-show="isOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        @keydown.escape.window="isOpen = false"
        id="crud-modal" 
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="p-4 md:p-5 space-y-4">
                    <form
                        @submit.prevent="validateSubmission()"
                        class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2 sm:col-span-1">
                                <label 
                                    for="username" 
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Atas nama
                                </label>
                                <input 
                                    type="text" 
                                    {{-- wire:model="username" --}}
                                    x-model="formData.username" 
                                    id="username" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                    placeholder="ketikan nama username pengajuan" 
                                >
                                <span x-show="errors.username" class="text-red-500 text-sm mt-2" x-text="errors.username"></span>
                                {{-- <x-input-error class="mt-2" :messages="$errors->get('username')" /> --}}
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label 
                                    for="phoneNumber" 
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    No Kontak
                                </label>
                                <input 
                                    type="text" 
                                    {{-- wire:model="phoneNumber"  --}}
                                    x-model="formData.phoneNumber"
                                    id="phoneNumber" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                    placeholder="ketikan nomor kontak user" 
                                >
                                <span x-show="errors.phoneNumber" class="text-red-500 text-sm mt-2" x-text="errors.phoneNumber"></span>
                                {{-- <x-input-error class="mt-2" :messages="$errors->get('phoneNumber')" /> --}}
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label 
                                    for="email" 
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Alamat email
                                </label>
                                <input 
                                    type="text" 
                                    {{-- wire:model="email"  --}}
                                    x-model="formData.email"
                                    id="email" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                    placeholder="ketikan alamat email user" 
                                >
                                <span x-show="errors.email" class="text-red-500 text-sm mt-2" x-text="errors.email"></span>
                                {{-- <x-input-error class="mt-2" :messages="$errors->get('email')" /> --}}
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label 
                                    for="category" 
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Kategori
                                </label>
                                <select
                                    {{-- wire:model="eventType" --}}
                                    x-model="formData.eventType"
                                    id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Pilih Kategori Acara</option>
                                    @foreach ($categories as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                <span x-show="errors.eventType" class="text-red-500 text-sm mt-2" x-text="errors.eventType"></span>
                                {{-- <x-input-error class="mt-2" :messages="$errors->get('eventType')" /> --}}
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                    </div>
                                    <input 
                                        {{-- wire:model="eventDate" --}}
                                        x-model="formData.eventDate"
                                        id="default-datepicker" 
                                        type="text" 
                                        datepicker 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                        placeholder="Select date"
                                    >
                                    {{-- <x-input-error class="mt-2" :messages="$errors->get('eventDate')" /> --}}
                                    <span x-show="errors.eventDate" class="text-red-500 text-sm mt-2" x-text="errors.eventDate"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button 
                                type="submit" 
                                class="py-2.5 px-5 bg-blue-700 me-2 mb-2 text-sm font-medium text-white focus:outline-none bg-blue rounded-lg border border-blue-200 hover:bg-blue-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-blue-100 dark:focus:ring-blue-700 dark:bg-blue-800 dark:text-blue-400 dark:border-blue-600 dark:hover:text-blue-700">
                                Kirim
                            </button>
                            <button 
                                x-on:click="closeModalSubmission"
                                type="button" 
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @script
        <script>
            Alpine.data('openModal', () => {
                return {
                    isOpen: false,
                    formData: {
                        username: '',
                        email: '',
                        phoneNumber: '',
                        eventType: '',
                        eventDate: ''
                    },
                    errors: {},
                    openModalSubmission() {
                        this.isOpen = true;
                    },
                    closeModalSubmission() {
                      

                        const isEmptyData =   ! this.formData.username &&
                                            ! this.formData.email &&
                                            ! this.formData.phoneNumber &&
                                            ! this.formData.eventType &&
                                            ! this.formData.eventDate;
                        if(isEmptyData) {
                            this.isOpen = false;
                            this.resetFormSubmission();
                        }
                        
                        if(!isEmptyData) {
                            let userConfirmed  = confirm('yakin untuk membatalkan?')
                            if(userConfirmed) {
                                this.resetFormSubmission();
                                this.isOpen = false;
                            }
                        }
                    
                        // if(userConfirmed ) {
                        //     this.resetFormSubmission();
                        //     this.isOpen = false;
                        // }
                    },
                    resetFormSubmission() {
                        this.formData = {
                            username: '',
                            email: '',
                            phoneNumber: '',
                            eventType: '',
                            eventDate: ''
                        };
                        this.errors = {}; 
                    },
                    checkInputPhoneNumber(value) {
                        inputNumber = value.trim();
                        if(inputNumber === '' || isNaN(inputNumber)) {
                            this.errors.phoneNumber = 'Input bukan angka. Silakan masukkan nomor telepon yang valid.';
                        }
                        if (inputNumber.length < 10) {
                            this.errors.phoneNumber = "Nomor telepon terlalu pendek.";
                        }
                        if (Number(inputNumber) <= 0) {
                            this.errors.phoneNumber = "Nomor telepon tidak valid.";
                        }
                    },
                    validateSubmission() {
                        this.errors = {};
                         // Validasi sederhana
                        if (!this.formData.username) {
                            this.errors.username = 'Nama user wajib diisi.';
                        }
                        if (!this.formData.email) {
                            this.errors.email = 'Alamat email wajib diisi.';
                        }
                        if (!this.formData.phoneNumber) {
                            this.errors.phoneNumber = 'Nomor kontak user wajib diisi.';
                        }else {
                            this.checkInputPhoneNumber(this.formData.phoneNumber)
                        }
                        if (!this.formData.eventType) {
                            this.errors.eventType = 'Kategori acara wajib dipilih.';
                        }
                        if (!this.formData.eventDate) {
                            this.errors.eventDate = 'Tanggal acara wajib dipilih.';
                        }
                    // Jika tidak ada error, lanjutkan proses pengiriman data
                        if (Object.keys(this.errors).length === 0) {
                            console.log('Semua validasi lolos, siap mengirim data...');
                            // Tambahkan logika pengiriman data di sini
                        }
                    }
                }
            })
        </script>
    @endscript
</div>
