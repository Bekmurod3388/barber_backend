@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Bookings ni tahrirlash</h1></div>
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


                    <form action="{{route('admin.bookings.update',$bookings->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Client Name</label>
                            <input type="text" name="client_name" value="{{$bookings->client_name}}"
                                   class="form-control" id="header_ru" placeholder="Services">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Client Phone number</label>
                            <input type="tel" name="client_phone_number" value="{{$bookings->client_phone_number}}"
                                   class="form-control" id="header_ru" placeholder="cost">
                        </div>
                        <div class="form-group">
                            <select name="barber_id" required class="form-select form-control form-select-lg mb-3"
                                    aria-label=".form-select-lg example" id="building">
                                <option value="{{$bookings->barber_id}}" selected> Sartarosh</option>
                                @foreach($barbers as $barber)
                                    @if( $barber->id != $bookings->barber_id)
                                        <option value="{{$barber->id}}">{{$barber->barber_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Kuni</label>
                            <input type="date" name="day" value="{{$bookings->day}}" class="form-control"
                                   id="header_ru" placeholder="id">
                        </div>

                        <div class="form-group">
                            <label for="header_ru">Vaqti</label>
                            <input type="time" min='09:00' max='21:00' name="start_time" value="{{ $bookings->start_time }}" class="form-control"
                                   id="header_ru" placeholder="id">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

