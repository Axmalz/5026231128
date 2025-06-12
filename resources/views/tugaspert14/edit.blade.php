@extends('template')
@section('content')

    <h3>Edit Truk</h3>

    <a href="/truk" class="btn btn-secondary mb-3">Kembali</a>

    @foreach ($truk as $t)
        <form action="/truk/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->id }}">

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="merktruk" class="control-label">Merk Truk</label>
                </div>
                <div class="col-6">
                    <input type="text" id="merktruk" name="merktruk"
                           value="{{ old('merktruk', $t->merktruk) }}"
                           required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="hargatruk" class="control-label">Harga Truk</label>
                </div>
                <div class="col-6">
                    <input type="number" id="hargatruk" name="hargatruk"
                           value="{{ old('hargatruk', $t->hargatruk) }}"
                           required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Ketersediaan</label>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="tersedia" id="tersedia1"
                               value="1" required {{ $t->tersedia ? 'checked' : '' }}>
                        <label class="form-check-label" for="tersedia1">Tersedia</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tersedia" id="tersedia0"
                               value="0" required {{ !$t->tersedia ? 'checked' : '' }}>
                        <label class="form-check-label" for="tersedia0">Tidak Tersedia</label>
                    </div>
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="berat" class="control-label">Berat (kg)</label>
                </div>
                <div class="col-6">
                    <input type="number" id="berat" name="berat"
                           value="{{ old('berat', $t->berat) }}"
                           required class="form-control">
                </div>
            </div>

            <div class="row p-1">
                <div class="col-8 text-end">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
