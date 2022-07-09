@extends('auth.Layout.auth')

@section('content')
<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('index') }}">
            <span class="sr-only">{{ env('APP_NAME') }}</span>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        </a>   
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create your account</h2>
        <p class="mt-3 text-center font-medium text-indigo-600 hover:text-indigo-500"> Start your 7-day free trial </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            @include('auth.__formErrors')
            <form action="{{ route('register') }}" class="space-y-6" action="#" method="POST"> @csrf
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name </label>
                    <div class="mt-1">
                        <input name="first_name" type="text" value="{{ old('first_name', null) }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name </label>
                    <div class="mt-1">
                        <input name="last_name" type="text" value="{{ old('last_name', null) }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" value="{{ old('email', null) }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create Account</button>
                </div>

                <p class="my-8 text-sm font-medium text-center text-gray-700">
                By clicking "Create Account" you agree to our <br>
                <a href="{{-- route('terms') --}}" class="text-purple-700 hover:text-purple-900">Terms of Service</a>
                and
                <a href="{{-- route('privacy') --}}" class="text-purple-700 hover:text-purple-900">Privacy Policy</a>.
            </p>

                <div class="text-center">
                    <div class="text-sm">
                        <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500"> Already have an account? </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection