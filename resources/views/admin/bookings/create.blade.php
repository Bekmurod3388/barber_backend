@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Band qilish</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong> Xatolik!!! </strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.bookings.store')}}" method="POST" accept-charset="UTF-8">
                        @csrf

                        <div class="form-group">
                            <label for="services">Mijoz ismi</label>
                            <input type="text" name="client_name" class="form-control" value="{{old('client_name')}}" required id="services" placeholder="Mijoz ismi">
                        </div>

{{--                        <div class="btn btn-danger w-100 ">hato</div>--}}
                        <div class="form-group">
                            <label for="cost">Mijoz telefoni</label>
                            <input type="tel" name="client_phone_number" class="form-control" value="{{old('client_phone_number')}}" id="cost" placeholder="+99890000000">
                        </div>

                        <div class="form-group">
                            <select name="barber_id" required class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example" id="building">
                                <option value="0" selected> Sartarosh </option>
                                @foreach($barbers as $barber)
                                    <option value="{{$barber->id}}">{{$barber->barber_name}}</option>
                                @endforeach
                            </select>
                        </div >

                        <div class="form-group" >
                            <label for="header_ru">Sana</label>
                            <input type="date" name="date" class="form-control" id="header_ru" placeholder="" value="{{old('date')}}">
                        </div>

                        <div class="form-group" >
                            <label for="header_ru">Vaqti</label>
                            <input type="time" name="time" class="form-control" id="header_ru" placeholder="" value="{{old('time')}}">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
