@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Foto</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Ooops!</strong> Qandaydir xatolik.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.photo.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="services">Foto nomi</label>
                            <input required="" type="text" name="photo_name" class="form-control" id="photo_name"
                                   placeholder="Foto nomi">
                        </div>


                        <div class="form-group">
                            <label for="cost">Foto</label>
                            <input required="" type="file" name="photo" class="form-control" id="photo" placeholder=" ">
                        </div>
                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>

                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

