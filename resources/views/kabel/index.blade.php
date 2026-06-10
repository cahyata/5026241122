@extends('template')
@section('title', 'Data Kabel')
@section('konten')

    <h2>Data Kabel</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('kabel.create') }}" class="btn btn-primary">Tambah Kabel</a>

    <br><br>

    <p>Cari Data Kabel :</p>
    <form action="{{ route('kabel.cari') }}" method="GET">
        <input type="text" name="cari" placeholder="Cari Kabel .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Kabel</th>
            <th>Merk Kabel</th>
            <th>Stock Kabel</th>
            <th>Tersedia?</th>
            <th>Aksi</th>
        </tr>

        @forelse($kabel as $row)
            <tr>
                <td>{{ $row->kodekabel }}</td>
                <td>{{ $row->merkkabel }}</td>
                <td>{{ $row->stockkabel }}</td>
                <td>{{ $row->tersedia ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="{{ route('kabel.edit', $row->kodekabel) }}" class="btn btn-warning">Edit</a>


                    <form action="{{ route('kabel.destroy', $row->kodekabel) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data kabel.</td>
            </tr>
        @endforelse
    </table>
@endsection
