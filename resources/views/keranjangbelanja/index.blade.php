@extends('template')
@section('judul_halaman', 'Data Keranjang Belanja')
@section('konten')



    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
<br />
    <a href="{{ route('keranjangbelanja.create') }}" class="btn btn-primary">Beli</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>

        @forelse($kabel as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>Rp {{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>
                    Rp {{ number_format($row->Jumlah * $row->Harga, 0, ',', '.') }}
                </td>
                <td>
                    <form action="{{ route('keranjangbelanja.destroy', $row->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Batal</button>

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
