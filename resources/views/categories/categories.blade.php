@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-black text-center md:text-left">Post Categories</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 py-10">
    @foreach($categories as $category)
    <div class="rounded-lg w-full shadow-md shadow-slate-200 bg-white">
        <div class="px-7 py-10">
            <h2 class="text-gray-900 hover:text-indigo-600 text-3xl font-bold block"><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </div>
    </div>
    @endforeach
</div>
@endsection