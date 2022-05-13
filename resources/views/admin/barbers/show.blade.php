@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.barber.index')}}" class="btn btn-primary">Barbersga qaytish</a>
                <div class="row container mt-4">
                    <table class=" table table-bordered border-primary ">
                        <tr>
                            <th>Barber Name</th>
                            <td>{{$barbers->borber_name}}</td>
                        </tr>
                        <tr>
                            <th>Barber phone number</th>
                            <td>{{$barbers->barber_phone_number}}</td>
                        </tr>
                        <tr>
                            <th>Adress</th>
                            <td>{{$barbers->barber_home_adress}}</td>
                        </tr>
                        <tr>
                            <th>Passport</th>
                            <td>{{$barbers->passport_number}}</td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td>{{$barbers->work_time}}</td>
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
