@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-black text-center md:text-left">Posts by Category of <span class="text-indigo-600">`{{ $category->name }}`</span></h1>

@if($posts->count())
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 py-10">
    @foreach($posts as $post)
    <x-post-card :post="$post" />
    @endforeach
</div>
@else
<p class="font-black text-2xl block text-center text-red-600 my-20">There are no posts.</p>
@endif
@endsection