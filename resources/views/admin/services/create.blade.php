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
                            <input type="text" name="services_name" class="form-control" id="services" placeholder="Services Name" required>
                        </div>
                        <div class="form-group">
                            <label for="cost">Cost</label>
                            <input type="number" name="cost" class="form-control" id="cost" placeholder="cost" required >
                        </div>

                        <div class="form-group">
                            <select name="barber_id" required class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example" id="building">
                                <option value="0" selected> Sartarosh </option>
                                @foreach($barbers as $barber)
                                    <option  value="{{$barber->id}}">{{$barber->barber_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
