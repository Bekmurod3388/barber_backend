@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.bookings.index')}}" class="btn btn-primary">Orqaga</a>
                <div class="row container mt-4">
                    <table class=" table table-bordered border-primary ">
                        <tr>
                            <th>Mijoz ismi</th>
                            <td>{{$bookings->client_name}}</td>
                        </tr>
                        <tr>
                            <th>Mijoz telefon raqami</th>
                            <td>{{$bookings->client_phone_number}}</td>
                        </tr>
                        <tr>
                            <th>Sartarosh id</th>
                            <td>{{$bookings->barber_id}}</td>
                        </tr>
                        <tr>
                            <th>Kuni</th>
                            <td>{{$bookings->day}}</td>
                        </tr>
                        <tr>
                            <th>Vaqti</th>
                            <td>{{$bookings->start_time}}</td>
                        </tr>

                        <tr>
                            <th>Band qilingan vaqt</th>
                            <td>{{$bookings->created_at}}</td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
