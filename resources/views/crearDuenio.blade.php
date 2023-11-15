<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Agregar dueño</h1>
    <form method="POST" action=" {{ route( 'duenio.store' ) }}">
    @csrf
    @method('POST')
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Tipo de dueño</label>
            <select name="tipoDuenio">
                @foreach($tipos as $tipo)
                <option value="{{ $tipo->id }}">{{ $tipo->descrpcion }}</option>
                @endforeach
            </select>
        </div>

        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>