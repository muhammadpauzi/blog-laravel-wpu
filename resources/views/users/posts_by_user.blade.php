@extends('layouts.app')

@section('content')
<div class="py-10">
    <h1 class="text-3xl font-black text-center mb-5">{{ $user->name }}</h1>
    <div class="w-max mx-auto">
        <div class="grid justify-items-center grid-cols-3 gap-2">
            <div class="rounded-lg shadow-md shadow-slate-200 bg-white w-full p-5 text-center">
                <span class="text-lg block">Posts</span>
                <span class="font-black block text-2xl">{{ $user->posts->count() }}</span>
            </div>
            <div class="rounded-lg shadow-md shadow-slate-200 bg-white w-full p-5 text-center">
                <span class="text-lg block">Followers</span>
                <span class="font-black block text-2xl">0</span>
            </div>
            <div class="rounded-lg shadow-md shadow-slate-200 bg-white w-full p-5 text-center">
                <span class="text-lg block">Following</span>
                <span class="font-black block text-2xl">0</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 py-10">
        @foreach($posts as $post)
        <div class="rounded-lg w-full shadow-md shadow-slate-200 bg-white">
            <div class="p-7">
                <small class="text-indigo-600 font-bold mb-3 block"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small>

                <h2 class="font-bold text-xl mb-3 block"><a href="/posts/{{ $post->slug }}" class="text-gray-900 hover:text-indigo-700">{{ $post->title }}</a></h2>

                <p class="text-gray-500 text-base mb-5 block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quo nemo, ipsa expedita aspernatur sit eius. Ipsam ab hic cumque obcaecati magni sequi sit libero, sed, reprehenderit assumenda iusto excepturi.</p>

                <div>
                    <span class="text-gray-500 block text-sm">Feb 24, 2022</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection