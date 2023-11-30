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
        <div class="d-flex mx-auto justify-content-center ">
            <div class="d-flex flex-column align-items-center">
                <h2 class="my-4">{{ $jadwal->Mata_Kuliah }}</h2>
                {{-- <h3>Note:</h3>
                <p>{{ $jadwal->materi->Note }}</p> --}}
            </div>
        </div>

        <div class="accordion mx-auto" id="accordionExample" style="max-width: 80vw;">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Link Materi
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong> <a href="{{ $jadwal->materi->Link_Materi }}" target="_blank">Link Materi {{ $jadwal->Mata_Kuliah }}</a> </strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Tingkat Kesiapan
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>{{ $jadwal->materi->Tingkat_Kesiapan }}</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Note
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>{{ $jadwal->materi->Note }}</strong>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
