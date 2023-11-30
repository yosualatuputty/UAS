@extends('layouts.index')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal UAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @section('container')
    <div class="mx-auto" style="width: 80vw;">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Hari</th>
            <th scope="col">Jam</th>
            <th scope="col">Ruang</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $baris)
            <tr>
                <th scope="row">{{ $baris->ID }}</th>
                <td>
                    <form action="{{ route('matkul', ['Matkul' => $baris->Mata_Kuliah]) }}" method="GET">
                        <button type="submit" class="btn">{{ $baris->Mata_Kuliah }}</button>
                    </form>
                </td>
                
                <td>{{ $baris->Day }}, {{ date('d-m-Y', strtotime($baris->Hari)) }}</td>
                <td>{{ $baris->Jam }}</td>
                <td>{{ $baris->Ruang }}</td>
            </tr>
                
            @endforeach 

          {{-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
          </tr> --}}
        </tbody>
      </table>
      {{-- <div class="d-flex mx-auto justify-content-center">
        <form action="">
            <input type="hidden" name="input1" id="" value="value1">
            <input type="hidden" name="input2" id="" value="value2">
            <button class="btn btn-primary" type="submit">SUBMIT</button>
        </form>
    </div> --}}
    </div>
    @if($jadwal->isEmpty())
    <div class="d-flex mx-auto justify-content-center">
        <h2>
            Empty Set
        </h2>
    </div>
    @endif
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>