@extends('frontend.layouts.master')

@section('layout')

    <main class="overflow-hidden {{ $mainClass ?? '' }}">
        @yield('content')
        @yield('footer')
    </main>
@endsection
