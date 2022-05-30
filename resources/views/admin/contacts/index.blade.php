@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"> Xabarlar </h1></div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col"> Ism </th>
                            <th class="" scope="col"> Email </th>
                            <th class="" scope="col"> Mavzu </th>
                            <th class="" scope="col"> Matn </th>

{{--                            <th class="w-25" scope="col">Amallar</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $ind=>$mes)
                            <tr>
                                <td class="col-1">{{($messages->currentpage()-1)*($messages->perpage())+$ind+1}}</td>
                                <td>{{$mes->name}}</td>
                                <td>{{$mes->email}}</td>
                                <td>{{$mes->title}}</td>
                                <td>{{$mes->message}}</td>

{{--                                <td class="col-2">--}}
{{--                                    <form action="{{route('admin.barber.destroy',$barber->id)}}" method="POST">--}}
{{--                                        <a title="Ko'rish" class="btn btn-primary btn-sm active"--}}
{{--                                           href="{{route('admin.barber.show',$barber->id)}}">--}}
{{--                                    <span class="btn-label">--}}
{{--                                        <i class="fa fa-eye"></i>--}}
{{--                                    </span>--}}

{{--                                        </a>--}}
{{--                                        <a title="Tahrirlash" class="btn btn-warning btn-sm active"--}}
{{--                                           href="{{route('admin.barber.edit',$barber->id)}}">--}}
{{--                                    <span class="btn-label">--}}
{{--                                        <i class="fa fa-pen"></i>--}}

{{--                                    </span>--}}

{{--                                        </a>--}}
{{--                                        <a href="{{url('barber',$barber->id)}}">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button title="O'chirish" type="submit"--}}
{{--                                                    class="btn btn-danger active btn-sm"><span class="btn-label">--}}
{{--                                        <i class="fa fa-trash"></i>--}}
{{--                                    </span></button>--}}
{{--                                        </a>--}}
{{--                                    </form>--}}
{{--                                </td>--}}

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div class="container">
                        <div class="row justify-content-center">

                            @if ($messages->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $messages->links() }}
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
