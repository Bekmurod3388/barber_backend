@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Booking</h1></div>
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


                    <form action="{{route('admin.bookings.store')}}" method="POST" accept-charset="UTF-8">

                        @csrf
                        <div class="form-group">
                            <label for="services">Client  Name</label>
                            <input type="text" name="client_name" class="form-control" id="services" placeholder="Client Name">
                        </div>

{{--                        <div class="btn btn-danger w-100 ">hato</div>--}}
                        <div class="form-group">
                            <label for="cost">Client phone</label>
                            <input type="tel" name="client_phone_number" class="form-control" id="cost" placeholder="+99890000000">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">barber ID</label>
                            <input type="text" name="barber_id" class="form-control" id="header_ru" placeholder="id">
                        </div> <div class="form-group">
                            <label for="header_ru">Time</label>
                            <input type="date" name="time" class="form-control" id="header_ru" placeholder="time">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
