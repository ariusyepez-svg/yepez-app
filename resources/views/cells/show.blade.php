<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Celda</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .card { border: 1px solid #ccc; padding: 20px; width: 40%; margin: 0px auto; box-shadow: 2px 2px 5px #eee; }
        .card-header { font-size: 20px; font-weight: bold; border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 15px; text-align: center; }
        .field { margin-bottom: 10px; font-size: 16px; }
        .label { font-weight: bold; color: #555; }
        .btn-back { display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #007bff; font-weight: bold; }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">Informe Detallado de la Celda</div>
        
        <div class="field"><span class="label">Celda ID:</span> {{ $cell->id }}</div>
        <div class="field"><span class="label">Nombre:</span> {{ $cell->name }}</div>
        <div class="field"><span class="label">Usuario:</span> {{ $cell->username }}</div>
        <div class="field"><span class="label">Contraseña:</span> ******</div>

        <a href="{{ url('/cells') }}" class="btn-back">[ Volver a la Lista ]</a>
    </div>

</body>
</html>
