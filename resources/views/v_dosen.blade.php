<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
@extends('layout.v_template')
    @section('content')

    <h1>Halaman Dosen</h1>

    <?php foreach( $dosen as $dsn ): ?>
    <ul>
    <li>NIP :{{($dsn['nip'])}}</li>
    <li>Nama :{{($dsn['nama'])}}</li>
    <li>Mata Kuliah :{{($dsn['matkul'])}}</li> 
    </ul>
    <?php endforeach; ?>

    @endsection

</body>
</html>
