<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
 
<title> Oscar - @yield('title')</title>

<meta name ='description' content= '@yield('meta-description','default')' />
</head>

<body>
@include('partials.nav')

@yield('content')


<p>Esta página web es una página HTML válida.</p>
</body>
</html>