<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1 class="display-3"style="margin-block: 15px; text-align:center;color:lightseagreen">Lista de Usuarios</h1>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('users.index') }}" method="get">
                    <div class="form-row">                 
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingInput"
                            placeholder="Búsqueda" name="txt" value="{{ $txt }}">
                            <label for="floatingInput">Búsqueda</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-info" value="Buscar"style="margin-bottom:10px;">
                                <a href="{{ route('users.create') }}" class="btn btn-outline-success" style="margin-bottom:10px;">Nuevo Usuario</a>
                        </div>
                        @include('flash-message')
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <table class="table align-middle table-striped table-bordered border-dark">
                    <thead class="table-dark">
                        <tr class="align-top" style="align-content:center;">
                            <th>@sortablelink('id')</th>
                            <th>@sortablelink('name')</th>
                            <th>@sortablelink('email')</th>
                            <th>@sortablelink('direccion')</th>
                            <th>@sortablelink('telefono')</th>
                            <th>@sortablelink('fechadenacimiento')</th>
                            <th>@sortablelink('lastaccess')</th>
                            <th>@sortablelink('rol')</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($users) <= 0)
                            <tr>
                                <td>No existen usuarios con ese nombre</td>
                            </tr>
                        @else
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->direccion }}</td>
                                    <td>{{ $user->telefono }}</td>
                                    <td>{{ date('d-M.Y', strtotime($user->fechanacimiento)) }}</td>
                                    <td>{{ $user->lastaccess }}</td>
                                    <td>{{ $user->rol ? $roles[$user->rol] : 'Sin rol asignado' }}</td>
                                    <td class="btn-group"><a href="{{ route('users.edit', $user->id) }}"
                                            class="btn btn-outline-warning btn-sm">Editar</a>
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modal-delete-{{ $user->id }}">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                                @include('users.delete')
                            @endforeach
                        @endif
                    </tbody>
                </table>
                {!!$users->appends(\Request::except('page'))->render()!!}
                <button type="button" class="btn btn-outline-danger" onclick = "location='/dashboard'">Regresar</button>
            </div>
        </div>
    </div>
</body>

</html>
