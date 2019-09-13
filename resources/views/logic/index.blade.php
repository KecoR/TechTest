@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <h6>Logic Test</h6>
                        </div>
                        <div class="card-body" style="text-align:center;">
                            <a href="{{ route('nomor1') }}" class="btn btn-primary btn-lg">Nomor 1</a>
                            <a href="{{ route('nomor2') }}" class="btn btn-primary btn-lg">Nomor 2</a>
                            <a href="{{ route('nomor3') }}" class="btn btn-primary btn-lg">Nomor 3</a>
                            <a href="{{ route('nomor4') }}" class="btn btn-primary btn-lg">Nomor 4</a>
                            <a href="{{ route('nomor5') }}" class="btn btn-primary btn-lg">Nomor 5</a>
                            <hr>
                            <a href="{{ route('rHome') }}" class="btn btn-secondary btn-lg">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection