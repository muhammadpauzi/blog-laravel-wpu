@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-black text-center md:text-left">Posts</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 py-10">
    @foreach($posts as $post)
    <div class="rounded-lg w-full shadow-md shadow-slate-200 bg-white">
        <div class="p-7">
            <small class="text-indigo-600 font-bold mb-3 block"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small>

            <h2 class="font-bold text-xl mb-3 block"><a href="/posts/{{ $post->slug }}" class="text-gray-900 hover:text-indigo-700">{{ $post->title }}</a></h2>

            <p class="text-gray-500 text-base mb-5 block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quo nemo, ipsa expedita aspernatur sit eius. Ipsam ab hic cumque obcaecati magni sequi sit libero, sed, reprehenderit assumenda iusto excepturi.</p>

            <div>
                <span class="text-gray-900 hover:text-indigo-600 font-semibold block"><a href="/users/{{ $post->user->username }}">{{ $post->user->name }}</a></span>
                <span class="text-gray-500 block text-sm">Feb 24, 2022</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection