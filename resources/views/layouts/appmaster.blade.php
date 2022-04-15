<!DOCTYPE html>
<html>
    <head>
       @include('includes.head')
        <title>Activity</title>
    </head>
<body min-height="100vh">
    <header>
       @include('includes.header')
    </header>
    <main style="margin-top:100px; " >
            @yield('content')
    </main>
       <footer class="page-footer dark">
           @include('includes.footer')
       </footer>
</body>
</html>

