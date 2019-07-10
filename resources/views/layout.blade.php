<!DOCTYPE html>
<html>
<head>
    <!-- <title>@yield('title', 'Laracasts')</title> -->
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
      .is-complete {
        text-decoration: line-through;
      }
    </style>
</head>
<body>
    <!-- <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">contact</a></li>
    </ul>
    @yield('content') -->


   <div class="container">
   		@yield('content')

   </div>
</body>
</html>