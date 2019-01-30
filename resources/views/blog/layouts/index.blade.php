<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('blog.includes.head')  
</head>
<body>
<main class="container"> 
@yield('content')
</main>
@include('blog.includes.script') 
</body>
</html>