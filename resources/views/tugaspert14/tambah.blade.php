@extends('template')
@section('content')

    <h3>Data Truk</h3>

    <a href="/truk"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke truk/store untuk dilakukan routing --}}
    <form action="/truk/store" method="post">
        {{ csrf_field() }}
        <div class='row p-1 mb-1'>
            <div class="col-2">
                <label class="control-label">Merk Truk</label>
            </div>
            <div class="col-6">
                <input type="text" name="merktruk" required="required" class="form-control">
            </div>

        </div>

        <div class='row p-1 mb-1'>
            <div class="col-2">
                <label class="control-label">Harga Truk</label>
            </div>
            <div class="col-6">
                <input type="number" name="hargatruk" required="required" class="form-control">
            </div>

        </div>

        <div class='row p-1 mb-1'>
            <div class="col-2">
            <label class="control-label">Ketersediaan</label>
            </div>
            <div class="col-6 d-flex align-items-center">
            <div class="form-check me-3">
                <input class="form-check-input" type="radio" name="tersedia" id="tersedia1" value="1" required>
                <label class="form-check-label" for="tersedia1">
                Tersedia
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="tersedia" id="tersedia0" value="0" required>
                <label class="form-check-label" for="tersedia0">
                Tidak Tersedia
                </label>
            </div>
            </div>
        </div>

        <div class='row p-1 mb-1'>
            <div class="col-2">
                <label class="control-label">Berat</label>
            </div>
            <div class="col-6">
                <input type="number" name="berat" required="required" class="form-control">
            </div>

        </div>

        <input type="submit" value="Simpan Data">
    </form>
@endsection
