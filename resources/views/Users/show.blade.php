<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<div class="card text-center">
    <div class="card-header">
      Información de {{$user->name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">Nombre:  {{$user->name}}</h5>
      <p class="card-text">Email:  {{$user->email}}</p>
      <p class="card-text">Nació el {{ date('d-M.Y', strtotime($user->fechanacimiento)) }}</p>
      <p class="card-text">Teléfono: {{ $user->telefono}}</p>
      <p class="card-text">Su rol es: {{$roles[$user->rol]}}</p>
      <p class="card-text"> Último acceso: {{ $user->lastaccess ? date("F j, Y, g:i a", strtotime($user->lastaccess)): 'No ha accedido al sistema' }}</p>
    </div>
    <div class="card-footer text-muted">
        <button type="button" class="btn btn-outline-danger" onclick = "location='/users'">Regresar</button>

    </div>
  </div>
</html>