<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Celda</title>
</head>
<body>
    <h3>Celda - Edit!</h3>
    <form method="post" action="{{ route('cells.update', $cell) }}">
        @csrf
        @method('put')

        ID: <input type="text" name="id" value="{{ $cell->id }}" readonly="true"/> <br>
        
        Nombre: <input type="text" name="name" value="{{ old('name', $cell->name) }}"/> 
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Usuario: <input type="text" name="username" value="{{ old('username', $cell->username) }}"/> 
        @error('username') <span style="color: red;">{{ $message }}</span> @enderror <br>
        
        Contraseña: <input type="password" name="password" value="{{ old('password', $cell->password) }}"/> 
        @error('password') <span style="color: red;">{{ $message }}</span> @enderror <br><br>

        <button type="submit">Save</button>
        <button type="button" onclick="location.href='{{ url('/cells') }}'">Cancel</button>
    </form>
</body>
</html>
