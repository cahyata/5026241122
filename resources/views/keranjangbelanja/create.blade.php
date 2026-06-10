@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <h2>Tambah Keranjang Belanja</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<div class="card">
        <div class="card-header">
            Form Tambah Data Keranjang Belanja
        </div>
        <div class="card-body">
            <form action="{{ route('keranjangbelanja.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="kodebarang"  value="{{ old('KodeBarang') }}" class="form-control" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" name="Jumlah" id="jumlahpembelian" min="0" value="{{ old('Jumlah') }}" class="form-control" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="text" name="Harga" id="harga" min="0" step="0.01" value="{{ old('Harga') }}" class="form-control" >
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Beli</button>
                        <a href="{{ route('keranjangbelanja.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <script>
        function validasiForm() {

            let kodeBarang = document.getElementById('kodebarang').value.trim();
            let jumlahPembelian = document.getElementById('jumlahpembelian').value.trim();
            let harga = document.getElementById('harga').value.trim();

            if (kodeBarang === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode barang wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (jumlahPembelian === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Jumlah pembelian wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (harga === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Harga per item wajib diisi",
                    icon: "error"
                });
                return false;
            }


            return true;
        }
    </script>
@endsection
