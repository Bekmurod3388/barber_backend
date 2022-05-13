@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Contact as</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.contact_as.create')}}">
                            <span class="btn-label">
{{--                                admin.bookings.index--}}
                                <i class="fa fa-plus"></i>
                            </span>
                           Contact qoshish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col">Phone</th>
                            <th class="" scope="col">Address</th>
                            <th class="" scope="col">Email</th>
                            <th class="" scope="col">Lattitude</th>
                            <th class="" scope="col">Longitude</th>



                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts_as as $contact_as)
                            <tr>
                                <th scope="row" class="col-1">{{$contact_as->id}}</th>
                                <td>{{$contact_as->phone}}</td>
                                <td>{{$contact_as->address}}</td>
                                <td>{{$contact_as->email}}</td>
                                <td>{{$contact_as->lattitude}}</td>
                                <td>{{$contact_as->longitude}}</td>


                                <td class="col-2">
                                    <form action="{{route('admin.contact_as.destroy',$contact_as->id)}}" method="POST">
                                        <a title="Ko'rish" class="btn btn-primary btn-sm active"
                                           href="{{route('admin.contact_as.show',$contact_as->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-eye"></i>
                                    </span>

                                        </a>
                                        <a title="Tahrirlash" class="btn btn-warning btn-sm active"
                                           href="{{route('admin.contact_as.edit',$contact_as->id)}}">
                                    <span class="btn-label">
<i class="fa fa-pen"></i>

                                    </span>

                                        </a>
                                        <a href="{{url('bookings',$contact_as->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button title="O'chirish" type="submit"
                                                    class="btn btn-danger active btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="container">
                        <div class="row justify-content-center">


                            {{--                            @if ($posts->links())--}}
                            {{--                                <div class="mt-4 p-4 box has-text-centered">--}}
                            {{--                                    {{ $posts->links() }}--}}
                            {{--                                </div>--}}
                            {{--                            @endif--}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
