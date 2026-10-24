<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Celdas</title>
    <style>
        table { width: 60%; margin: 0px auto; border: 1px solid black; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 6px 12px; }
    </style>
</head>
<body>
    <div style="text-align: center; margin: 15px 0px; font-size: 22px;"><b>¡Celdas - Listar!</b></div>
    <div style="margin: 10px 0px; text-align: center;">
        <a href="{{ url('/cells/create') }}">[ + Nueva Celda ]</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cellsDb as $cell)
            <tr>
                <td style="text-align: center;">{{ $cell->id }}</td>
                <td>{{ $cell->name }}</td>
                <td>{{ $cell->username }}</td>
                <td style="text-align: center;">
                    <a href="{{ route('cells.show', $cell) }}" style="color: green; margin-right: 5px;">Detalle</a> |
                    <a href="{{ route('cells.edit', $cell) }}" style="color: blue; margin-left: 5px; margin-right: 5px;">Editar</a> |
                    <form action="{{ route('cells.destroy', $cell) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Eliminar celda?');">
                        @csrf
                        @method('delete')
                        <button type="submit" style="color: red; background: none; border: none; cursor: pointer; text-decoration: underline;">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
