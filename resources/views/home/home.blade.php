{{-- start TOP --}}
@include('home.include.top')
{{-- end TOP --}}

@include('home.include.nav')
{{-- end NAV --}}


{{-- start TODO --}}
@include('home.include.heroSection')
{{-- end TODO --}}


@yield('content')


{{-- start FOOTER --}}
@include('home.include.footer')
{{-- end FOOTER --}}



{{-- start BOTTOM --}}
@include('home.include.bottom')
{{-- end BOTTOM --}}
