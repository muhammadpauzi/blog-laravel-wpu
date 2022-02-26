@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6 rounded-lg bg-white shadow-md shadow-slate-200">
    <h1 class="text-gray-900 font-black text-4xl mb-5 block">{{ $post->title }}</h1>
    <div>
        <div>
            <span class="text-gray-900 font-semibold inline-block hover:text-indigo-600">
                <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>
            </span>
            ~
            <span class="text-indigo-600 font-bold inline-block">
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </span>
            ~
            <span class="text-gray-500 inline-block text-sm">Feb 24, 2022</span>
        </div>
    </div>
    <div class="my-20"></div>
    <div class="text-base text-gray-800 leading-relaxed font-serif">
        {!! $post->body !!}
    </div>
</div>
@endsection