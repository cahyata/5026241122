@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')



    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <br />
    <a href="{{ route('nilaikuliah.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>

        </tr>

        @forelse($nilaikuliah as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>
                    @php
                        $nilai = $row->NilaiAngka;
                        if ($nilai >= 81) {
                            echo 'A';
                        } elseif ($nilai >= 61) {
                            echo 'B';
                        } elseif ($nilai >= 41) {
                            echo 'C';
                        } else {
                            echo 'D';
                        }
                    @endphp
                </td>
                <td>{{ $row->NilaiAngka * $row->SKS }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data nilai kuliah.</td>
            </tr>
        @endforelse
    </table>


@endsection
