<x-layout>
    <x-slot:title>
        Halaman Daftar Posts
    </x-slot:title>

    <h1>Daftar Posts</h1>

    @foreach ($posts as $post)
    <h3>
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
   </h3>
    @endforeach
</x-layout>