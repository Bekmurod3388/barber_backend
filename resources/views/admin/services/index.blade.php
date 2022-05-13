@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Services</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.services.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Servis qoshish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">#</th>
                            <th class="" scope="col">Xizmat nomi</th>
                            <th class="" scope="col">Naxri</th>
                            <th class="w-25" scope="col">Sartarosh</th>

                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $servic)
                            @foreach($barbers as $barber)
                                @if($servic->barber_id == $barber->id)
                                    <tr>
                                        <th scope="row" class="col-1">{{$servic->id}}</th>
                                        <td>{{$servic->services_name}}</td>
                                        <td>{{$servic->cost}}</td>
                                        <td>{{$barber->barber_name}}</td>

                                        <td class="col-2">
                                            <form action="{{route('admin.services.destroy',$servic->id)}}"
                                                  method="POST">
                                                <a title="Ko'rish" class="btn btn-primary btn-sm active"
                                                   href="{{route('admin.services.show',$servic->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-eye"></i>
                                    </span>

                                                </a>
                                                <a title="Tahrirlash" class="btn btn-warning btn-sm active"
                                                   href="{{route('admin.services.edit',$servic->id)}}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                                </a>
                                                <a href="{{url('services',$servic->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button title="O'chirish" type="submit"
                                                            class="btn btn-danger active btn-sm"><span
                                                            class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
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
