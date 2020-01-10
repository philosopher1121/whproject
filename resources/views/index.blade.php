<!DOCTYPE html>
<html lang="en">
    {{-- lang="{{ str_replace('_', '-', app()->getLocale()) }}" --}}
    <head>

       @include('basic.header')
    </head>
    <body>
        @include('basic.nav')

        <h1>Hello, world!</h1>


        @section('sidebar')
                This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
            <span style="font-size: 3em; color: Tomato;">
                <i class="fas fa-camera"></i>
            </span>
        </div>


        @include('basic.footer')


        @include('basic.script')
    </body>
</html>
