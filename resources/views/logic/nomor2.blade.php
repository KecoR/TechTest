@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6>Logic Test - Nomor 2 (Angka Terbesar)</h6>
                    </div>
                    <div class="card-body">
                        Angka terbesar dari deretan angka : 
                        @foreach ($bilangans as $item => $val)
                            {{ $val }} 
                        @endforeach
                        adalah : {{ $maksimal }}
                        <hr>
                        <a href="{{ route('logic') }}" class="btn btn-secondary btn-lg">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection