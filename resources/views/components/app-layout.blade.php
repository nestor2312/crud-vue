<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
 
  <main id="app"> 
    {{-- <h1 class="mt-1">Hellooo</h1> --}}
    <header>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="city">City</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="son">Son</a>
          </li>
        </ul>
      </nav> 
    </header> 
    {{-- <h1 class="mt-5">Hellooo</h1> --}}
  <hello-world></hello-world>
    {{$slot}}
   
</main>  
  
<script scr="{{mix('/js/app.js')}}"></script>
</body>
</html>