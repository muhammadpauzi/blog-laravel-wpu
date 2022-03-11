@extends('dashboard.layouts.app')

@section('dashboard-content')
<h1 class="text-3xl font-black text-center md:text-left mb-5">Create New Post</h1>
<div class="min-h-full">
    <div class="max-w-full w-full space-y-8">
        <form class="space-y-6" action="/dashboard/posts" method="POST" novalidate enctype="multipart/form-data">
            @csrf
            <div class="rounded-md shadow-sm max-w-lg">
                <div class="mb-2">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input id="title" name="title" type="text" autocomplete="title" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border" value="{{ old('title') }}" autofocus>
                    @error('title')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                </div>
                <div class="mb-2">
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                    <input id="slug" name="slug" type="text" readonly autocomplete="slug" class="p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border bg-gray-100" value="{{ old('slug') }}">
                    @error('slug')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                    <small class="text-gray-500 font-medium block my-2">Auto generate after you filled field title and click tab.</small>
                </div>
                <div class="mb-2">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="description" name="description" type="description" autocomplete="description" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border">{{ old('description') }}</textarea>
                    @error('description')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                </div>
                <div class="mb-2">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                    <select id="category" name="category_id" autocomplete="category-name" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border">
                        @foreach($categories as $category)
                        @if( old('category_id') == $category->id)
                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>
                    <input id="image" name="image" type="file" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border" autofocus>
                    @error('image')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                </div>
            </div>
            <div>
                <label for="body" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
            </div>

            <div>
                <button type="submit" class="group relative flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create Post
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', async function() {
        const res = await fetch(`/dashboard/posts/slug?${
            new URLSearchParams({title: this.value})
            .toString()
        }`);
        const data = await res.json();
        slug.value = data.slug;
    });
</script>
@endsection