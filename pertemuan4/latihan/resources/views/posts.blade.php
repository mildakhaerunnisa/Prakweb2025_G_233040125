<x-layout>
    <x-slot:title>
        Halaman Daftar Posts
    </x-slot:title>

    <div class="max-w-5xl mx-auto mt-10">
        <h1 class="text-4xl font-bold mb-8">Daftar Posts</h1>

        <div class="space-y-6">
            @foreach ($posts as $post)
                <div class="bg-white shadow-md rounded-xl p-6 border border-gray-200">

                    {{-- Judul --}}
                    <h2 class="text-2xl font-semibold text-gray-900 mb-2">
                        <a href="/posts/{{ $post->slug }}" 
                           class="hover:text-blue-600 transition duration-200">
                            {{ $post->title }}
                        </a>
                    </h2>

                    {{-- Nama Penulis = Nama Kategori --}}
                    <p class="text-sm text-gray-500 mb-4">
                        Oleh: 
                        <a href="/categories/{{ $post->category->slug }}" 
                           class="font-medium text-blue-600 hover:underline">
                            {{ $post->category->name }}
                        </a>
                    </p>

                    {{-- Excerpt --}}
                    <p class="text-gray-700 leading-relaxed mb-4">
                        {{ $post->excerpt }}
                    </p>

                    {{-- Tombol Read More --}}
                    <a href="/posts/{{ $post->slug }}" 
                       class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                        Read More
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>