@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.contact_as.index')}}" class="btn btn-primary">Contact as ga  qaytish</a>
                <div class="row container mt-4">
                    <table class=" table table-bordered border-primary ">
                        <tr>
                            <th>Contact Phone</th>
                            <td>{{$contacts_as->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$contacts_as->address}}</td>
                        </tr>
                        <tr>
                            <th>Email...</th>
                            <td>{{$contacts_as->email}}</td>
                        </tr>
                        <tr>
                            <th>Lattitude</th>
                            <td>{{$contacts_as->lattitude}}</td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <td>{{$contacts_as->longitude}}</td>
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
