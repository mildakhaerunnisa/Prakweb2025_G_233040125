<x-layout>
    <x-slot:title>
        Daftar Kategori
    </x-slot:title>

    <div class="max-w-3xl mx-auto mt-10 bg-white rounded-xl shadow p-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Daftar Kategori</h2>

        <div class="divide-y">
            @foreach ($categories as $category)
                <div class="flex items-center justify-between py-4">

                    {{-- Nomor--}}
                    <div class="w-10 text-lg font-semibold text-gray-700">
                        {{ $loop->iteration }}
                    </div>

                    {{-- Nama Kategori --}}
                    <a href="/categories/{{ $category->slug }}" 
                       class="flex-1 text-lg text-gray-900 font-medium hover:underline">
                        {{ $category->name }}
                    </a>

                    {{-- Total Post (warna hijau seperti contoh) --}}
                    <div class="text-lg font-semibold text-blue-600">
                        {{ $category->posts->count() }} Posts
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>
