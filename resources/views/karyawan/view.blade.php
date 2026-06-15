@extends('template')
@section('judul_halaman', 'Kode Soal mykaryawan')
@section('konten')

    <h2>Kode Soal mykaryawan</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form View Data Karyawan
        </div>
        <div class="card-body">
            <form action="{{ route('karyawan.view', $karyawan->kodepegawai) }}" method="GET" >
                @csrf
                @method('PUT')

                <div class="row">
                    <label for="kodepegawai" class="col">Kode Pegawai</label>
                    <div class="col">
                        <input type="text" name="kodepegawai" id="kodepegawai"  value="{{ old('kodepegawai', $karyawan->kodepegawai) }}" class="form-control" readonly>
                    </div>



                    <label for="Nama" class="col">Nama Lengkap</label>
                    <div class="col">
                        <input type="text" name="Nama" id="Nama"value="{{ old('Nama', Str::title(ucfirst($karyawan->namalengkap))) }}" class="form-control" readonly>
                    </div>



                    <label for="divisi" class="col">Divisi</label>
                    <div class="col-sm">
                        <input type="text" name="divisi" id="divisi"  value="{{ old('divisi', $karyawan->divisi) }}" class="form-control" readonly>
                    </div>



                    <label for="departemen" class="col">Departemen</label>
                    <div class="col-sm">
                        <input type="text" name="departemen" id="departemen"
                            value="{{ old('departemen', $karyawan->departemen) }}" class="form-control" readonly>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection
