@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Barbers</h1></div>
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


                    <form action="{{route('admin.barber.store')}}" method="POST" accept-charset="UTF-8">

                        @csrf
                        <div class="form-group">
                            <label for="barbers">Barber  Name</label>
                            <input type="text" name="barber_name" class="form-control" id="barber_name" placeholder="Barber Name">
                        </div>

{{--                        <div class="btn btn-danger w-100 ">hato</div>--}}
                        <div class="form-group">
                            <label for="barber_phone_number">Barber Phone</label>
                            <input type="tel" name="barber_phone_number" class="form-control" id="cost" placeholder="+99890000000">
                        </div>

                        <div class="form-group">
                            <label for="barber_home_adress">Home Adres </label>
                            <input type="text" name="barber_home_adress" class="form-control" id="barber_home_adress" placeholder="Home Adress">

                            <div class="form-group">
                                <label for="barber_phone_number">Passport</label>
                                <input type="text" name="passport_number" class="form-control" id="cost" placeholder="AA 0000000">
                            </div>

                        </div> <div class="form-group">
                            <label for="header_ru">Work Time</label>
                            <input type="text" name="work_time" class="form-control" id="work_time" placeholder="00:00">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
