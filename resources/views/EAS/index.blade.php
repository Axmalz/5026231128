@extends('template')
@section('content')

    <h3>Data Nilai</h3>

    <a href="/eas/tambah" class="btn btn-info"> + Tambah Data</a>

    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID </th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $n)
            <tr>
            <td>{{ $n->id }}</td>
            <td>{{ $n->normorinduksiswa }}</td>
            <td>{{ $n->nilaiangka }}</td>
            <td>{{ $n->sks }}</td>

            <td>
                @php
                    $na = $n->nilaiangka;
                    if ($na <= 40) $huruf = 'D';
                    elseif ($na <= 60) $huruf = 'C';
                    elseif ($na <= 80) $huruf = 'B';
                    else $huruf = 'A';
                @endphp
                {{ $huruf }}
            </td>
            <td>{{ $n->sks * $n->nilaiangka }}</td>

            </tr>
        @endforeach
    </table>
    <!-- paginate hanya bisa dipakai dengan paginate, saat get() harus dihapus -->
@endsection
