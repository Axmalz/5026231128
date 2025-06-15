@extends('template')

@section('content')
    <div class="card">
        <div class="card-header bg-success text-white">
            {{ $nrp }} – {{ $name }}
        </div>
        <div class="card-body">
            <h5 class="card-text">
                Anda Pengunjung ke : <strong>{{ $count }}</strong>
            </h5>
        </div>
    </div>
@endsection
