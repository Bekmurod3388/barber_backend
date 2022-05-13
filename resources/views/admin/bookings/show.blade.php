@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.bookings.index')}}" class="btn btn-primary">Bookingsga qaytish</a>
                <div class="row container mt-4">
                    <table class=" table table-bordered border-primary ">
                        <tr>
                            <th>Client Name</th>
                            <td>{{$bookings->client_name}}</td>
                        </tr>
                        <tr>
                            <th>Client phone number</th>
                            <td>{{$bookings->client_phone_number}}</td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>{{$bookings->barber_id}}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$bookings->time}}</td>
                        </tr>
                        <tr>
                            <th>created_at</th>
                            <td>{{$bookings->created_at}}</td>
                        </tr>

{{--                        <tr>--}}
{{--                            <th>Xonadoshlari</th>--}}
{{--                            <td>--}}
{{--                                @if(count($sheriklar)>1)--}}
{{--                                    @foreach($sheriklar as $sh)--}}
{{--                                        @if($sh->id==$data->id) @continue @endif--}}
{{--                                        <a href="{{route('admin.students.show',$sh->id)}}">{{$sh->surname}} {{$sh->name}} {{ $sh->f_s_name }}</a>--}}
{{--                                        <br>--}}
{{--                                    @endforeach--}}
{{--                                @else--}}
{{--                                    <h3>Yolg'iz turadi</h3>--}}
{{--                                @endif--}}
{{--                            </td>--}}
{{--                        </tr>--}}

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
