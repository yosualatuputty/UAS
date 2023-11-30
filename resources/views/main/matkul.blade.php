@extends('layouts.index')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('container')
    <div class="d-flex mx-auto justify-content-center">
        <h2 class="mt-4">{{ $jadwal->Mata_Kuliah }}</h2>
    </div>
    @endsection
</body>
</html>