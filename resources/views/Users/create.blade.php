<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nuevo Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
<div class="container">
    <h1 class="display-3"style="margin-block: 15px; text-align:center;color:lightseagreen">Creación de nuevo Usuario</h1>
    <div class="row">
        <div class="col-xl-12">
            @if ($errors)
                <ul class="list-group">
                    @foreach ($errors->all() as $item)
                        <li class="list-group-item list-group-item-danger" style="margin-block: 2px;">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="form-floating mb-1">
                        <input type="text" name="name" class="form-control" id="floatingInput"
                            placeholder="Abcde Fghi">
                        <label for="floatingInput">Nombres Completos</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="text" name="direccion" class="form-control" id="floatingInput"
                            placeholder="Abcde Fghi">
                        <label for="floatingInput">Dirección</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="text" name="telefono" class="form-control" id="floatingInput"
                            placeholder="0123456789" maxlength="10">
                        <label for="floatingInput">Teléfono</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="date" name="fechanacimiento" class="form-control" id="floatingInput" value="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d'); ?>">
                        <label for="floatingInput">Fecha de Nacimiento</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" name="rol" id="floatingSelect"
                            aria-label="Floating label select example" multiple>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                            <option value="3">Invitado</option>
                        </select>
                        <label for="floatingSelect">Rol </label>
                    </div>
                </div>
                <div class="form-group" style="margin-top:10px;">
                    <input type="submit" class="btn btn-outline-success" value="Guardar">
                    <button type="button" class="btn btn-outline-danger" onclick = "location='/users'">Cancelar</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
</div>
</body>
</html>
