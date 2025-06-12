<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Truk</h3>

    <a href="/truk"> Kembali</a>

    <br />
    <br />

    @foreach ($truk as $t)
        <form action="/truk/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->id }}"> <br />
            Merk Truk <input type="text" required="required" name="merktruk" value="{{ $t->merktruk }}"> <br />
            Harga Truk <input type="number" required="required" name="hargatruk" value="{{ $t->hargatruk }}"> <br />
            Tersedia
            <input type="checkbox" name="tersedia" value="1" {{ $t->tersedia ? 'checked' : '' }}> <br />
            Berat
            <input type="number" required="required" name="berat" value="{{ $t->berat }}"> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach


</body>

</html>
