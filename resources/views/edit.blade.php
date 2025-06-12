@extends('template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-secondary mb-3">Kembali</a>

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="nama" class="control-label">Nama</label>
                </div>
                <div class="col-6">
                    <input type="text" id="nama" name="nama"
                           value="{{ old('nama', $p->pegawai_nama) }}"
                           required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="jabatan" class="control-label">Jabatan</label>
                </div>
                <div class="col-6">
                    <input type="text" id="jabatan" name="jabatan"
                           value="{{ old('jabatan', $p->pegawai_jabatan) }}"
                           required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="umur" class="control-label">Umur</label>
                </div>
                <div class="col-6">
                    <input type="number" id="umur" name="umur"
                           value="{{ old('umur', $p->pegawai_umur) }}"
                           required class="form-control">
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="alamat" class="control-label">Alamat</label>
                </div>
                <div class="col-6">
                    <textarea id="alamat" name="alamat" required class="form-control" rows="3">{{ old('alamat', $p->pegawai_alamat) }}</textarea>
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
