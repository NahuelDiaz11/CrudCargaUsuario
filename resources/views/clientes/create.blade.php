<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>



<h1>Ingrese sus datos</h1>

@if($errors->any())
<div class="aler aler danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('clientes.store')}}" method="post">
@csrf
<div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" name="name"  class="form-control" id="name" >
</div>
<div class="mb-3">
  <label for="surname" class="form-label">Surname </label>
  <input type="text" name="surname"  class="form-control" id="surname" >
</div>

<div class="mb-3">
  <label for="email" class="form-label">Email </label>
  <input type="text" name="email"  class="form-control" id="email" >
</div>

<div class="mb-3">
  <label for="password" class="form-label">Password </label>
  <input type="text" name="password" class="form-control" id="password" >
</div>

<div class="mb-3">
  <label for="password2" class="form-label">Confirm Password </label>
  <input type="text" name="password2"  class="form-control" id="password2">
</div>
    
<button type="submit" class="btn btn-primary">Guardar</button>
</form>

</body>
</html>