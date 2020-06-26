@extends('layouts.auth')

@section('content')

    <div class="login-page">
        <div class="w-full min-h-screen">
            <div class="brand-logo w-3/12 p-6 flex justify-center">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="rounded-full shadow-lg" width="100">
            </div>
            <div class="flex">
                <div class="w-3/12 bg-white p-4 shadow rounded-lg">
                    <h1 class="text-3xl pb-4">Register</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="p-2">
                            <label for="name" class="mb-2">Username</label>
                            <input type="text" name="name" id="name" placeholder="John Doe" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                            <div class="text-red-900 p-3 bg-red-300 rounded-lg mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label for="email" class="mb-2">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="John@example.com" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-red-900 p-3 bg-red-300 rounded-lg mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label for="password" class="mb-2">Password</label>
                            <input type="password" name="password" id="password" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="text-red-900 p-3 bg-red-300 rounded-lg mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="p-2">
                            <label for="password_confirmation" class="mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal">
                        </div>

                        <div class="p-2">
                            <label class="md:w-2/3 block">
                                <input class="mr-2 leading-tight" type="checkbox" name="news_letter" id="news_letter">
                                <span class="text-sm">Receive Monthly News Letter</span>
                            </label>
                        </div>

                        <div class="p-2 mb-4">
                            <button class="bg-primary hover:bg-primary text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
