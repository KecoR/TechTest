@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6>Logic Test - Nomor 5 (Bubble Sort)</h6>
                    </div>
                    <div class="card-body">
                        Deretan angka sebelum di Bubble Sort : 
                        @foreach ($bilangans as $item => $val)
                            {{ $val }} 
                        @endforeach
                        <br>
                        Deretan angka setelah di Bubble Sort :
                        @php
                            $size = count($bilangans)-1;
                            for ($i=0; $i<$size; $i++) {
                                for ($j=0; $j<$size-$i; $j++) {
                                    $k = $j+1;
                                    if ($bilangans[$k] < $bilangans[$j]) {
                                        // Swap elements at indices: $j, $k
                                        list($bilangans[$j], $bilangans[$k]) = array($bilangans[$k], $bilangans[$j]);
                                    }
                                }
                            }
                        @endphp
                        @foreach ($bilangans as $item => $val)
                            {{ $val }} 
                        @endforeach
                        <hr>
                        <a href="{{ route('logic') }}" class="btn btn-secondary btn-lg">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection