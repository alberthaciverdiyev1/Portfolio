<!DOCTYPE html>
<html lang="az">

@include('layout.head')
<body>

@if(Route::currentRouteName() === 'home')
    @include('layout.home.main')
@endif

<div onclick="topFunction()" id="topBtn" class="hover-this up-button">
    <i class="bi bi-chevron-up"></i>
    <svg id="progressCircle" width="50" height="50" viewBox="0 0 50 50">
        <circle cx="25" cy="25" r="20" fill="none" stroke="var(--lighter-gray)" stroke-width="2"
                stroke-dasharray="125.6" stroke-dashoffset="125.6"/>
    </svg>
</div>

@include('layout.navbar')
@include('layout.sidebar')

<main>
    @yield('content')
    @include('layout.footer')

</main>

<script src="{{asset('js/script.js')}}"></script>
</body>

</html>
