@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-black text-center md:text-left">Posts</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 py-10">
    @foreach($posts as $post)
    <x-post-card :post="$post" />
    @endforeach
</div>
@endsection