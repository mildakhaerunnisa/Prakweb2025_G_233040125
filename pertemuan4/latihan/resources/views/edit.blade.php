<x-layout>
    <x-slot:title>Edit Post</x-slot:title>

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
        <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Edit Post</h2>

        <form action="{{ route('dashboard.update', $post->id) }}" 
              method="POST" 
              enctype="multipart/form-data"
              class="space-y-4">

            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold mb-1">Title</label>
                <input type="text" name="title" 
                       value="{{ old('title', $post->title) }}"
                       class="w-full border rounded p-2">
                @error('title')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="block font-semibold mb-1">Category</label>
                <select name="category_id" class="w-full border rounded p-2">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="block font-semibold mb-1">Excerpt</label>
                <input type="text" name="excerpt" 
                       value="{{ old('excerpt', $post->excerpt) }}"
                       class="w-full border rounded p-2">
                @error('excerpt')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="block font-semibold mb-1">Content</label>
                <textarea name="body" rows="6" class="w-full border rounded p-2">{{ old('body', $post->body) }}</textarea>
                @error('body')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="block font-semibold mb-1">Image</label>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" 
                         class="w-40 mb-3 rounded">
                @endif

                <input type="file" name="image" class="w-full border rounded p-2">
                @error('image')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('dashboard.index') }}" 
                   class="px-4 py-2 bg-gray-400 text-white rounded-md">
                    Cancel
                </a>

                <button type="submit" 
                        class="px-4 py-2 bg-blue-600 text-white rounded-md">
                    Update Post
                </button>
            </div>

        </form>
    </div>
</x-layout>