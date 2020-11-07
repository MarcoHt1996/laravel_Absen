@extends('layouts.app')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
     crossorigin="anonymous">
</head>
<body>
       <div class="container">
        <h2>Form Mata Kuliah</h2>
        <hr>
    <form action="{{ route("matakuliah.simpan")}}" method="POST">
        @csrf
    <div class="form-group">
        <label for="id">Id</label>
        <input type="text" name="id" class="form-control">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
        <input type="submit" value="Simpan" class="btn btn-dark btn-block">
    </form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
        </tr>
    </thead>

<tbody>
    @foreach ($matakuliah as $item)
    <tr>
        <td>{{ $item-> id }}</td>
        <td>{{ $item-> nama }}</td>
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
