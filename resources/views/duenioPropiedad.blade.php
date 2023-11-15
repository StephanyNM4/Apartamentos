<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1>Propiedades dueño</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">idDuenio</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($duenio as $item)
            <tr>
            <th scope="row">{{ $item -> idDuenio }}</th>
            <td>{{ $item -> nombre }}</td>
            <td>{{ $item -> apellido }}</td>
            <td>{{ $item -> correo }}</td>
            </tr>
            @endforeach
            
            <div>
                    <a href="{{ route( 'duenio.mostrar') }}">Regresar</a>
            </div>
        </tbody>
    </table>
</body>
</html>