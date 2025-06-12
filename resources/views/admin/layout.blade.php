<!DOCTYPE html>
<html lang="az">

@include('admin.layout.head')
<body>

@include('admin.layout.navbar')
@include('admin.layout.sidebar')

<main>
    @yield('content')
    @include('admin.layout.footer')

</main>

<script src="{{asset('js/script.js')}}"></script>
</body>

</html>
