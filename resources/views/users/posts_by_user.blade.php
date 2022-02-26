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
        <x-post-card :post="$post" />
        @endforeach
    </div>
    @endsection