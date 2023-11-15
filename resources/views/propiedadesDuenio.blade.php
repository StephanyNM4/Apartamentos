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
                <th scope="col">Id<th>
                <th scope="col">piso</th>
                <th scope="col">área</th>
                <th scope="col">color</th>
                <th scope="col">idDuenio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($propiedadesDuenio as $propiedad)
            <tr>
            <th scope="row">{{ $propiedad -> id }}</th>
            <td></td>
            <td>{{ $propiedad -> piso }}</td>
            <td>{{ $propiedad -> área }}</td>
            <td>{{ $propiedad -> color }}</td>
            <td>{{ $propiedad -> idDuenioP }}</td>
            </tr>
            @endforeach
            
            <div>
                    <a href="{{ route( 'propiedad.duenio', $propiedad->idDuenioP ) }}">Mostrar informacion de dueño</a>
            </div>
        </tbody>
    </table>
</body>
</html>