@extends('dashboard.layouts.app')

@section('dashboard-content')
<div class="max-w-4xl mx-auto py-10 px-6 rounded-lg bg-white shadow-md shadow-slate-200">
    <a href="/dashboard/posts" class="text-indigo-600 font-bold block mb-4">Back to My Posts</a>
    <h1 class="text-gray-900 font-black text-4xl mb-5 block leading-snug">{{ $post->title }}</h1>
    <div>
        <div>
            <span class="text-indigo-600 font-bold inline-block">
                <a href="/posts?categories={{ $post->category->slug }}">{{ $post->category->name }}</a>
            </span>
            ~
            <span class="text-gray-500 inline-block text-sm">{{ $post->created_at->format('h:i A M, d Y') }}</span>
            ~
            <div class="space-x-2 inline-block">
                <a href="" class="text-indigo-600">Edit</a>
                <a href="" class="text-red-600">Delete</a>
            </div>
        </div>
    </div>
    <div class="my-20"></div>
    <div class="body-post text-base text-gray-800 leading-relaxed font-serif">
        {!! $post->body !!}
    </div>
</div>
@endsection