@extends('layouts.app')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Jadwal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
     crossorigin="anonymous">
</head>
<body>
        <div class="container">
        <h2>Form Jadwal</h2>
        <hr>
    <form action="{{ route("jadwal.simpan")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id">Id</label>
            <input type="text" name="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" class="form-control">
            <div class="form-group">
                <label for="matakuliah">Mata kuliah</label>
                <input type="text" name="matakuliah"  class="form-control">
            </div>
        </div>
    <div class="form-group">
        <label for="nidn">Nidn</label>
        <input type="text" name="nidn" class="form-control">
    </div>
        <div class="form-group">
        <label for="noruang">No Ruang</label>
        <input type="text" name="noruang" class="form-control">
    </div>
    <div class="form-group">
        <label for="hari">Hari</label>
        <input type="text" name="hari" class="form-control">
    </div>
    <div class="form-group">
        <label for="sesi">Sesi</label>
        <input type="text" name="sesi" class="form-control">
    </div>
        <input type="submit" value="Simpan" class="btn btn-dark btn-block">
    </form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Kelas</th>
            <th>Mata Kuliah</th>
            <th>Nidn</th>
            <th>No Ruang</th>
            <th>Hari</th>
            <th>Sesi</th>
        </tr>
    </thead>

<tbody>
    @foreach ($jadwal as $item)
    <tr>
        <td>{{ $item-> id }}</td>
        <td>{{ $item-> kelas }}</td>
        <td>{{ $item-> matakuliah }}</td>
        <td>{{ $item-> nidn }}</td>
        <td>{{ $item-> noruang}}</td>
        <td>{{ $item-> hari }}</td>
        <td>{{ $item-> sesi }}</td>
    </tr>
@endforeach
</tbody>
</table>
    </div>

    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
