@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title"> Sartarosh qo`shish </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong> Xatolik!.. </strong>
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
                            <label for="barbers"> Sartarosh nomi</label>
                            <input type="text" name="Nomi" class="form-control" id="barber_name" placeholder="barber_name">
                        </div>

                        <div class="form-group">
                            <label for="barber_phone_number"> Telefon raqami </label>
                            <input type="tel" name="telefon_raqami" class="form-control" id="cost" placeholder="barber_phone_number">
                        </div>

                        <div class="form-group">
                            <label for="barber_home_adress"> Manzili </label>
                            <input type="text" name="address" class="form-control" id="barber_home_adress" placeholder=" Adress">
                        </div>

                        <div class="form-group">
                            <label for="barber_phone_number">Passport Seriyasi</label>
                            <input type="text" name="address" class="form-control" id="cost" placeholder="AA 0000000">
                        </div>

                         <div class="form-group">
                            <label for="header_ru"> Kelish vaqti</label>
                            <input type="time" name="start" class="form-control" id="work_time">
                        </div>

                         <div class="form-group">
                            <label for="header_ru"> Ketish vaqti</label>
                            <input type="time" name="end" class="form-control" id="work_time">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
