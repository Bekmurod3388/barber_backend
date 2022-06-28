@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"> Foydalanuvchilar </h1></div>
                    <div class="col-md-1">
                        {{--                        <a class="btn btn-primary" href="{{route('admin.users.create')}}">--}}
                        {{--                            <span class="btn-label">--}}
                        {{--                                admin.bookings.index--}}
                        {{--                                <i class="fa fa-plus"></i>--}}
                        {{--                            </span>--}}
                        {{--                            Sartaroshlar qo'shish--}}
                        {{--                        </a>--}}
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col"> Nomi</th>
                            <th class="" scope="col"> Email</th>
{{--                            <th class="w-25" scope="col">Amallar</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $ind=>$user)
                            <tr>
                                <td class="col-1">{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>


{{--                                <td class="col-2">--}}
{{--                                    <form action="{{route('admin.barber.destroy',$barber->id)}}" method="POST">--}}
{{--                                        --}}
{{--                                        <a title="Ko'rish" class="btn btn-primary btn-sm active"--}}
{{--                                           href="{{route('admin.barber.show',$barber->id)}}">--}}
{{--                                        <span class="btn-label">--}}
{{--                                            <i class="fa fa-eye"></i>--}}
{{--                                        </span>--}}
{{--                                        </a>--}}
{{--                                        --}}
{{--                                            <a title="Tahrirlash" class="btn btn-warning btn-sm active"--}}
{{--                                               href="{{route('admin.barber.edit',$barber->id)}}">--}}
{{--                                            <span class="btn-label">--}}
{{--                                                <i class="fa fa-pen"></i>--}}
{{--                                            </span>--}}

{{--                                            </a>--}}
{{--                                            <a href="{{url('barber',$barber->id)}}">--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button title="O'chirish" type="submit"--}}
{{--                                                        class="btn btn-danger active btn-sm">--}}
{{--                                                    <span class="btn-label">--}}
{{--                                                    <i class="fa fa-trash"></i> --}}
{{--                                                    </span>--}}
{{--                                                </button>--}}
{{--                                            </a>--}}

{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div class="container">
                        <div class="row justify-content-center">

{{--                            @if ($barbers->links())--}}
{{--                                <div class="mt-4 p-4 box has-text-centered">--}}
{{--                                    {{ $barbers->links() }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
