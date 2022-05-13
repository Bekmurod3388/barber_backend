@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Services </h1></div>
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


                    <form action="{{route('admin.services.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="services">Services Name</label>
                            <input type="text" name="services_name" class="form-control" id="services" placeholder="Services Name">
                        </div>
                        <div class="form-group">
                            <label for="cost">Cost</label>
                            <input type="number" name="cost" class="form-control" id="cost" placeholder="cost">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">barber ID</label>
                            <input type="text" name="barber_id" class="form-control" id="header_ru" placeholder="id">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection