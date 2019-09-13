@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h6>Webdev Test</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('saveData') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputImage">Image:</label>
                                <input type="file" name="profile_image" id="exampleInputImage" class="image" required>
                                <input type="hidden" name="x1" value="" />
                                <input type="hidden" name="y1" value="" />
                                <input type="hidden" name="w" value="" />
                                <input type="hidden" name="h" value="" />
                                <p><img style="max-width:500px;" id="previewimage" style="display:none;"/></p>
                                @if(session('path'))
                                    <img src="{{ session('path') }}" />
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            <a href="{{ route('rHome') }}" class="btn btn-secondary btn-lg">Back</a>
                        </form>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><img src="{{ asset('image/users/crop/'.$user->image) }}" width="70px"></td>
                                            <td>{{ $user->status == 1 ? "Aktif" : "Tidak Aktif" }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/jquery.imgareaselect.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("table").DataTable();
        });
        jQuery(function($) {
            
            var p = $("#previewimage");
            $("body").on("change", ".image", function(){

                var imageReader = new FileReader();
                imageReader.readAsDataURL(document.querySelector(".image").files[0]);

                imageReader.onload = function (oFREvent) {
                    p.attr('src', oFREvent.target.result).fadeIn();
                };
            });

            $('#previewimage').imgAreaSelect({
                onSelectEnd: function (img, selection) {
                    $('input[name="x1"]').val(selection.x1);
                    $('input[name="y1"]').val(selection.y1);
                    $('input[name="w"]').val(selection.width);
                    $('input[name="h"]').val(selection.height);            
                }
            });
        });
    </script>
@endsection