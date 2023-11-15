<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Dueños</title>
</head>
<body>
    <h1>Todos los dueños de apartamentos </h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id dueño</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Propiedades</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($duenios as $duenio)
            <tr>
            <th scope="row">{{$duenio->idDuenio}}</th>
            <td>{{$duenio->nombre}}</td>
            <td>{{$duenio->apellido}}</td>
            <td>{{$duenio->correo}}</td>
            <td>
            <a class="btn btn-success" href="{{ route('propiedad.mostrar', $duenio->idDuenio) }}">Mostrar</a>
            </td>
            <td>
            <a class="btn btn-danger" href="{{ route('duenio.delete', $duenio->idDuenio) }}" >Eliminar</a>
            </td>
            <td>
            <a class="btn btn-warning" href="{{ route('duenio.edit', $duenio->idDuenio) }}">Editar</a>
            </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{ route(( 'duenio.create' )) }}" class="btn btn-primary">Agregar nuevo dueño</a>
    
</body>
</html>