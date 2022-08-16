<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"> 
</head>
<body>
 
  <main id="app"> 
    {{-- <h1 class="mt-1">Hellooo</h1> --}}
    <header>
      {{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Person</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="city">City</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="son">Son</a>
          </li>
        </ul>
      </nav>  --}}
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="product">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category">Categories</a>
          </li>
        </ul>
      </nav> 
    </header> 
    {{$slot}}
   
</main> 
  
{{-- <script scr="{{mix('/js/app.js')}}"></script> --}}
<script src="{{mix('js/app.js')}}"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function () {
    $('#post').DataTable();
});
</script>
</body>
</html>