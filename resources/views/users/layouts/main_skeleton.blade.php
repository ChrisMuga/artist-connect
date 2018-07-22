@include('users.layouts.header')
@include('users.layouts.navbar')
<div class="container py-3">
    @yield('content')
    @include('users.layouts.footer')
</div>