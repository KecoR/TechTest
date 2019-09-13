@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6>Logic Test - Nomor 5 (Array Matrix)</h6>
                    </div>
                    <div class="card-body">
                        @php
                            for($i=0; $i<4; $i++) {
                                for ($j=0; $j<3; $j++) { 
                                    echo $bilangan[$i][$j]. " ";
                                }
                                echo "<br>";
                            }
                        @endphp
                        <hr>
                        <a href="{{ route('logic') }}" class="btn btn-secondary btn-lg">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection