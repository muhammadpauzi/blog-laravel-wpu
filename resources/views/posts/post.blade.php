@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6 rounded-lg bg-white shadow-md shadow-slate-200">
    <a href="/posts" class="text-indigo-600 font-bold block mb-4">Back to All Posts</a>

    <div class="my-5 rounded-sm overflow-hidden">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}'
        s image">
    </div>

    <h1 class="text-gray-900 font-black text-4xl mb-5 block leading-snug">{{ $post->title }}</h1>
    <div>
        <div>
            <span class="text-gray-900 font-semibold inline-block hover:text-indigo-600">
                <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>
            </span>
            ~
            <span class="text-indigo-600 font-bold inline-block">
                <a href="/posts?categories={{ $post->category->slug }}">{{ $post->category->name }}</a>
            </span>
            ~
            <span class="text-gray-500 inline-block text-sm">{{ $post->created_at->format('M, d Y h:i A') }}</span>
        </div>
    </div>
    <div class="my-20"></div>
    <div class="body-post text-base text-gray-800 leading-relaxed font-serif">
        {!! $post->body !!}
    </div>
</div>
@endsection