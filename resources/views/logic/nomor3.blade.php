@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (!empty($row))
                    <div class="alert alert-success" role="alert">
                        @php
                            for($i=0; $i<$row; $i++) { 
                                for($j=0; $j<=$i; $j++) { 
                                    echo $j+1; 
                                } echo "<br>"; 
                            }
                        @endphp
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h6>Logic Test - Nomor 3 (Segitiga)</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('nomor3Post') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="baris">Masukan Angka</label>
                                <input type="text" name="baris" class="form-control">
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