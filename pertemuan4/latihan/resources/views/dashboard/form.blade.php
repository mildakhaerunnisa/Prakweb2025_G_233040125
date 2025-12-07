@props(['categories'])

{{-- Form Body --}}
<form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="grid gap-4 grid-cols-2">

        {{-- Title --}}
        <div class="col-span-2">
            <label for="title" class="block mb-2.5 text-sm font-medium text-heading">Title</label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                class="bg-neutral-secondary border-0 border-default text-heading text-sm rounded-base
                       focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body
                       @error('title') border border-red-600 @enderror"
                placeholder="Enter post title">

            {{-- Error message --}}
            @error('title')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Category --}}
        <div class="col-span-2">
            <label for="category_id" class="block mb-2.5 text-sm font-medium text-heading">Category</label>

            <select
                id="category_id"
                name="category_id"
                class="bg-neutral-secondary border-0 border-default text-heading text-sm rounded-base
                       focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body
                       @error('category_id') border border-red-600 @enderror">

                <option value="">Select category</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            {{-- Error message --}}
            @error('category_id')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Image Upload --}}
        <div class="col-span-2">
            <label for="image" class="block mb-2.5 text-sm font-medium text-heading">Upload Image</label>

            <input
                type="file"
                name="image"
                id="image"
                accept="image/png, image/jpeg, image/jpg"
                class="cursor-pointer bg-neutral-secondary-medium border text-heading text-sm rounded-base
                       focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body
                       @error('image') border border-red-600 @enderror">

            {{-- Error message --}}
            @error('image')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Excerpt --}}
        <div class="col-span-2">
            <label for="excerpt" class="block mb-2.5 text-sm font-medium text-heading">Excerpt</label>

            <textarea
                name="excerpt"
                id="excerpt"
                rows="3"
                class="bg-neutral-secondary border-0 border-default text-heading text-sm rounded-base
                       focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body
                       @error('excerpt') border border-red-600 @enderror"
                placeholder="Write a short excerpt">{{ old('excerpt') }}</textarea>

            {{-- Error message --}}
            @error('excerpt')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Body --}}
        <div class="col-span-2">
            <label for="body" class="block mb-2.5 text-sm font-medium text-heading">Body</label>

            <textarea
                name="body"
                id="body"
                rows="8"
                class="bg-neutral-secondary border-0 border-default text-heading text-sm rounded-base
                       focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body
                       @error('body') border border-red-600 @enderror"
                placeholder="Write your post content here">{{ old('body') }}</textarea>

            {{-- Error message --}}
            @error('body')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

    </div>

    {{-- Form Footer --}}
    <div class="flex items-center space-x-4 border-default pt-4 mt-6">
        <button type="submit"
            class="inline-flex items-center text-white bg-brand hover:bg-brand-strong border border-transparent
                   px-3 py-2.5 text-sm font-semibold tracking-tight rounded-base shadow-xs focus:outline-none">
            Create Post
        </button>

        <a href="{{ route('dashboard.index') }}"
            class="text-body bg-neutral-secondary hover:bg-neutral-tertiary border border-default px-3 py-2.5
                   text-sm font-medium leading-5 rounded-base focus:outline-none">
            Cancel
        </a>
    </div>
</form>