@extends('dashboard.layouts.app')

@section('dashboard-content')
<h1 class="text-3xl font-black text-center md:text-left mb-5">My Posts</h1>
<a href="/dashboard/posts/create" class="mb-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Create Post</a>
<div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                @if(session('success'))
                <div class="bg-white shadow-sm p-5 border-l-4 border-green-500 mb-5">
                    <span class="font-medium text-green-500 text-base">{{ session('success') }}</span>
                </div>
                @endif

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($posts as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-indigo-800">{{ $post->category->name }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium space-x-2">
                                    <a href="/dashboard/posts/{{ $post->slug }}" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="/dashboard/posts/{{ $post->slug }}" class="inline-block" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Are you sure to delete this post?')" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection