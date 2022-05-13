@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Barbers ni tahrirlash</h1></div>
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


                    <form action="{{route('admin.barber.update',$barbers->id)}}" method="POST" accept-charset="UTF-8">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Barber Name</label>
                            <input type="text" name="barber_name" value="{{$barbers->barber_name}}" class="form-control" id="header_ru" placeholder="Barber Name">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Phone number</label>
                            <input type="tel" name="barber_phone_number" value="{{$barbers->barber_phone_number}}" class="form-control" id="header_ru" placeholder="Barber Phone">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Home Adres</label>
                            <input type="text" name="barber_home_adress" value="{{$barbers->barber_home_adress}}" class="form-control" id="header_ru" placeholder="Hom Adress">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Passport Number</label>
                            <input type="taxt" name="passport_number" value="{{$barbers->passport_number}}" class="form-control" id="header_ru" placeholder="AA 0000000">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Work time</label>
                            <input type="time" name="work_time" value="{{$barbers->work_time}}" class="form-control" id="header_ru" placeholder="Wort Time">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

