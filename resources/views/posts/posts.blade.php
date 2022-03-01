@extends('layouts.app')

@section('content')

<div class="block md:grid grid-cols-2 gap-5 items-center">
    <div>
        @if($category)
        <h1 class="text-3xl font-black text-center md:text-left">All Posts in <span class="text-indigo-600">{{ $category->name }}</span></h1>
        @else
        <h1 class="text-3xl font-black text-center md:text-left">Posts</h1>
        @endif
    </div>
    <div class="max-w-3xl my-5 md:my-0">
        <!-- <label for="company-website" class="block text-sm font-medium text-gray-700"> Website </label> -->
        <form action="/posts" class="mt-1 flex rounded-md shadow-sm">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <input type="text" name="search" id="search" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-none rounded-l-md sm:text-sm border-gray-300 border" placeholder="Search..." value="{{ request('search') }}" autofocus>
            <button class="inline-flex items-center px-5 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm py-3"> Search </button>
        </form>
    </div>
</div>

@if($posts->count())
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 py-10">
    @foreach($posts as $post)
    <x-post-card :post="$post" />
    @endforeach
</div>
@else
<p class="font-bold text-xl block text-center text-red-600 my-20">There are no posts.</p>
@endif
@endsection