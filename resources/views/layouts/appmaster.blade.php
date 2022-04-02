<html>
    <head>
       @include('includes.head')
    </head>
<body>
       @include('includes.header')
       @yield('content')
       <footer class="page-footer dark">
           @include('includes.footer')
       </footer>
</body>
</html>

