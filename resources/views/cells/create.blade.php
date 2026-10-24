<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Celda</title>
</head>
<body>
    <h3>Celas - Create!</h3>
    <form method="post" action="{{ route('cells.store') }}">
        @csrf
        Nombre: <input type="text" name="name" value="{{ old('name') }}"/>
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror <br>

        Usuario: <input type="text" name="username" value="{{ old('username') }}"/>
        @error('username') <span style="color: red;">{{ $message }}</span> @enderror <br>

        Contraseña: <input type="password" name="password"/>
        @error('password') <span style="color: red;">{{ $message }}</span> @enderror <br><br>

        <button type="submit">Save</button>
        <button type="button" onclick="location.href='{{ url('/cells') }}'">Cancel</button>
    </form>
</body>
</html>
