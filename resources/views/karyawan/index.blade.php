@extends('template')
@section('judul_halaman', 'Kode Soal mykaryawan')
@section('konten')



    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
<br />


    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>

        @forelse($mykaryawan as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ Str::title(ucfirst($row->namalengkap)) }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                    <a href="{{ route('karyawan.view', $row->kodepegawai) }}" class="btn btn-warning">View</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data karyawan.</td>
            </tr>
        @endforelse
    </table>
@endsection
