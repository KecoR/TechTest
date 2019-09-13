@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('failed'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('failed') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h6>Logic Test - Nomor 1 (Cek Angka Prima)</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('nomor1Post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nomor">Masukan Angka</label>
                                <input type="text" name="nomor1" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Cek</button>
                            <a href="{{ route('logic') }}" class="btn btn-secondary btn-lg">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection