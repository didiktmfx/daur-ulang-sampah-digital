<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- File: resources/views/konversi.blade.php -->

<!-- Judul Halaman -->
<h1>Konversi Sampah Digital</h1>

<!-- Form Konversi -->
<form action="{{ route('konversi') }}" method="post">
    @csrf
    <label for="sampah_digital">Sampah Digital:</label>
    <input type="text" id="sampah_digital" name="sampah_digital">
    <button type="submit">Konversi</button>
</form>

<!-- Hasil Konversi -->
@if (session('token_digital'))
    <h2>Hasil Konversi:</h2>
    <p>Token Digital: {{ session('token_digital') }}</p>
@endif
</body>
</html>