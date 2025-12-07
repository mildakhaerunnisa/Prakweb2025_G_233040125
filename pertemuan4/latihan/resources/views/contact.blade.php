<x-layout>
    <x-slot:title>
        Contact
    </x-slot:title>

    <div class="max-w-5xl mx-auto mt-12">
        <h1 class="text-4xl font-bold text-gray-900 text-center mb-10">
            Hubungi Kami
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 bg-white p-8 rounded-xl shadow-md">

            {{-- FORM CONTACT --}}
            <div>
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Kirim Pesan</h2>

                <form action="#" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Nama Lengkap</label>
                        <input type="text"
                               class="w-full border border-gray-300 p-3 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500"
                               placeholder="Masukkan nama Anda">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Email</label>
                        <input type="email"
                               class="w-full border border-gray-300 p-3 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500"
                               placeholder="nama@email.com">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Pesan</label>
                        <textarea rows="5"
                                  class="w-full border border-gray-300 p-3 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500"
                                  placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            {{-- INFO KONTAK --}}
            <div>
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Informasi Kontak</h2>

                <p class="text-gray-700 leading-relaxed mb-6">
                    Jika Anda memiliki pertanyaan, kritik, atau saran, silakan hubungi kami melalui informasi berikut.
                </p>

                <div class="space-y-4">
                    <p class="text-gray-800">
                        <span class="font-semibold">Alamat:</span> Bandung, Jawa Barat
                    </p>

                    <p class="text-gray-800">
                        <span class="font-semibold">Telepon:</span> +62 811-1223-3345
                    </p>

                    <p class="text-gray-800">
                        <span class="font-semibold">Email:</span> myblog@gmail.com
                    </p>
                </div>

                {{-- SOCIAL MEDIA --}}
                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        {{-- FACEBOOK --}}
                        <a href="#" class="text-gray-700 hover:text-blue-600 transition" title="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12a10 10 0 1 0-11.5 9.9v-7H8v-3h2.5V9.5c0-2.5 1.5-3.9 3.7-3.9 1.1 0 2.2.2 2.2.2v2.5H15c-1.2 0-1.6.8-1.6 1.6V12H17l-.5 3h-2.9v7A10 10 0 0 0 22 12z"/>
                            </svg>
                        </a>

                        {{-- INSTAGRAM --}}
                        <a href="#" class="text-gray-700 hover:text-blue-600 transition" title="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>