@extends('template')
@section('content')

    <h3>Data Truk</h3>

    <a href="/truk/tambah" class="btn btn-info"> + Tambah Truk Baru</a>

	<form action="/truk/cari" method="GET" class="form-inline">
        <label class="form-label"><strong>Cari Data Truk :</strong></label>
		<input type="text" name="cari" placeholder="Cari Truk .." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>ID</th> <!-- apakah perlu? -->
            <th>Merk Truk</th>
            <th>Harga Truk</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($truk as $t)
            <tr>
            <td>{{ $t->id }}</td> <!-- apakah perlu? -->
            <td>{{ $t->merktruk }}</td>
            <td>${{ number_format($t->hargatruk, 2, '.', ',') }}</td>
            <td>
            {{ $t->tersedia == 1 ? 'tersedia' : 'tidak tersedia' }}
            </td>
            <td>{{ $t->berat }} kg</td>
            <td>
            <a href="/truk/edit/{{ $t->id }}" class="btn btn-success">Edit</a>
            <a href="/truk/hapus/{{ $t->id }}"class="btn btn-danger">Hapus</a>
            </td>
            </tr>
        @endforeach
    </table>
    {{ $truk->links() }} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus -->
@endsection
