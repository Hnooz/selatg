@extends('layouts.auth')

@section('content')
    <div class="flex items-center min-h-screen">
        <div class="w-full max-w-lg mx-auto overflow-hidden bg-white rounded-lg shadow">
            <div class="px-6 py-4">
                <div class="flex justify-center text-3xl font-bold text-gray-700">
                    <h1 class="flex items-center">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        سلعتك
                    </h1>
                </div>
                <div class="mt-1 text-xl font-bold text-center text-gray-600">مرحبا بعودتك</div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="w-full mt-4">
                        <input type="email" name="email" placeholder="البريد الالكتروني"
                               class="block w-full px-4 py-3 mt-2 text-gray-700 placeholder-gray-500 bg-gray-100 border border-gray-300 rounded appearance-none focus:outline-none focus:bg-white"/>
                        @error('email')
                        <p class="mt-4 text-xs text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="w-full mt-4">
                        <input type="password" name="password" placeholder="كلمه السر"
                               class="block w-full px-4 py-3 mt-2 text-gray-700 placeholder-gray-500 bg-gray-100 border border-gray-300 rounded appearance-none focus:outline-none focus:bg-white"/>
                        @error('password')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <button type="submit"
                                class="px-4 py-2 text-white bg-gray-700 rounded hover:bg-gray-600 focus:outline-none">
                            تسجيل دخول
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
