@extends('alpine::layouts.app', ['classes' => ['body' => 'min-h-screen bg-gray-50 flex flex-col justify-center px-4 py-12 sm:px-6 lg:px-8']])

@section('content')
    <main class="sm:mx-auto sm:w-full sm:max-w-md">
        @include('alpine::partials.logo', ['classes' => 'mx-auto w-16 h-16 rounded-full'])
        <h2 class="mt-4 text-center text-3xl leading-9 font-extrabold text-gray-900">
            @yield('title')
        </h2>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow rounded-md sm:px-10">
                @yield('main')
            </div>
        </div>
    </main>
@endsection