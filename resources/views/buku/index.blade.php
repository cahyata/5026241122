@extends('template')
@section('judul_halaman', 'Data Buku')
@section('konten')



    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
<br />


    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Ketersediaan</th>
            <th>Pinjam</th>
        </tr>

        @forelse($buku as $row)
            <tr>
                <td>{{ $row->judul }}</td>
                <td>{{ $row->penulis }}</td>
                <td>{{ $row->tahun }}</td>
                <td>{{ (date('Y') - $row->tahun) > 5 ? 'Lama' : 'Baru' }}</td>
                <td>{{ $row->sedang_dipinjam ? 'Tidak Tersedia' : 'Tersedia' }}</td>
                <td>
                    @if (!$row->sedang_dipinjam)
                        <form action="{{ route('buku.pinjam', $row->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button class="btn btn-primary" }>Pinjam</button>
                        </form>
                    @endif

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data buku.</td>
            </tr>
        @endforelse
    </table>
@endsection
