@extends('layouts.app')

@section('content')
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Log in to your account</h2>
        </div>
        @if(session('success'))
        <div class="bg-white shadow-sm p-5 border-l-4 border-green-500">
            <span class="font-medium text-green-500 text-base">{{ session('success') }}</span>
        </div>
        @endif
        @if(session('loginError'))
        <div class="bg-white shadow-sm p-5 border-l-4 border-red-500">
            <span class="font-medium text-red-500 text-base">{{ session('loginError') }}</span>
        </div>
        @endif
        <form class="mt-8 space-y-6" action="/login" method="POST" novalidate>
            @csrf
            <div class="rounded-md shadow-sm">
                <div class="mb-2">
                    <label for="email-address" class="block text-sm font-medium text-gray-700 mb-2">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border" value="{{ old('email') }}">
                    @error('email')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                </div>
                <div class="mb-2">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input id="password" name="password" type="password" autocomplete="password" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border">
                    @error('password')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Remember me </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Forgot your password? </a>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Log in
                </button>
            </div>

            <div class="w-full text-center">
                <a href="/register" class="font-medium text-sm my-5 text-indigo-600 hover:text-indigo-500">You don't have an account?, Register now!</a>
            </div>
        </form>
    </div>
</div>
@endsection