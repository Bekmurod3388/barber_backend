@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Sertifikat</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.sertifikat.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data" required=" ">
                        @csrf
                        <div class="form-group">
                            <label for="services">Sertifikat Name</label>
                            <input required="" type="text" name="sertifikat_name" class="form-control" id="sertifikat_name"
                                   placeholder="Sertifikat Name">
                        </div>


                        <div class="form-group">
                            <label for="cost">Sertifikat</label>
                            <input  required=" " type="file" name="sertifikat" class="form-control" id="photo" placeholder=" ">
                        </div>
                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>

                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


