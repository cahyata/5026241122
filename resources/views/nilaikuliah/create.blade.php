@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <h2>Tambah Data</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Kuliah
        </div>
        <div class="card-body">
            <form action="{{ route('nilaikuliah.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="nrp" id="nrp"  value="{{ old('nrp') }}" class="form-control" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaiangka" id="nilaiangka" min="0" value="{{ old('nilaiangka') }}" class="form-control" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="sks" id="sks" min="0" step="0.01" value="{{ old('sks') }}" class="form-control" >
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <script>
        function validasiForm() {

            let nrp = document.getElementById('nrp').value.trim();
            let nilaiAngka = document.getElementById('nilaiangka').value.trim();
            let sks = document.getElementById('sks').value.trim();

            if (nrp === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nilaiAngka === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nilai angka wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (sks === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "SKS wajib diisi",
                    icon: "error"
                });
                return false;
            }


            return true;
        }
    </script>
@endsection
