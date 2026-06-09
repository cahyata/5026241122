@extends('template')
@section('title', 'Data Kabel')
@section('konten')

    <h2>Edit Kabel</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card">
        <div class="card-header">
            Form Edit Data Kabel
        </div>
        <div class="card-body">
            <form action="{{ route('kabel.update', $kabel->kodekabel) }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="MerkKabel" class="col-sm-2 col-form-label">Merk Kabel</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkkabel" id="merkkabel" maxlength="20" value="{{ old('merkkabel', $kabel->merkkabel) }}" class="form-control" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="StockKabel" class="col-sm-2 col-form-label">Stock Kabel</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockkabel" id="stockkabel" min="0" value="{{ old('stockkabel', $kabel->stockkabel) }}" class="form-control" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Tersedia" class="col-sm-2 col-form-label">Tersedia?</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="1" {{ old('tersedia', $kabel->tersedia) == 1 ? 'selected' : '' }}>Ya</option>
                            <option value="0" {{ old('tersedia', $kabel->tersedia) == 0 ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        <a href="{{ route('kabel.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <script>
        function validasiForm() {
            let merkKabel = document.getElementById('merkkabel').value.trim();
            let stockKabel = document.getElementById('stockkabel').value.trim();
            let tersedia = document.getElementById('tersedia').value;

            if (merkKabel === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Merk kabel wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (stockKabel === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Stock kabel wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (parseInt(stockKabel) < 0) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Stock kabel tidak boleh kurang dari 0",
                    icon: "error"
                });
                return false;
            }

            if (tersedia === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Status ketersediaan wajib diisi",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection

