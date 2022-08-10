@extends('Marketing.Landing.Layout.landing')

@section('content')
<div class="min-h-full flex flex-col justify-center pt-28 pb-48 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">     
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">{{ $content['title'] }}</h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            @include('auth.__formSuccessMessage')
            @include('auth.__formErrors')
            <form method="POST" action="{{ route('password.email') }}" class="space-y-6"> @csrf
                <p class="mb-10 text-base leading-6 text-gray-700">Enter your email address below and we'll get you back on track.</p>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Request Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
