@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Servicesni tahrirlash</h1></div>
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


                    <form action="{{route('admin.services.update',$services->id)}}" method="POST"
                          accept-charset="UTF-8">
                        @method('PUT')
                        @csrf
                        @foreach($barbers as $barber)
                            @if( $services->barber_id == $barber->id )
                                <div class="form-group">
                                    <label for="header_ru">Services</label>
                                    <input type="text" name="services_name" value="{{$services->services_name}}"
                                           class="form-control" id="header_ru" placeholder="Services">
                                </div>
                                <div class="form-group">
                                    <label for="header_ru">Narxi</label>
                                    <input type="text" name="cost" value="{{$services->cost}}" class="form-control"
                                           id="header_ru" placeholder="cost">
                                </div>

                                <div class="form-group">
                                    <label class="text text-primary" for="floatingInput"> Oldingi rasmn </label>
                                    <img style="width: 200px; height: 200px;" src="/photo/{{$services->photo}}" alt="Bu rasm">
                                </div>

                                <div class="form-group">
                                    <label class="text text-primary" for="floatingInput"> Yangi rasmni yuklang</label>
                                    <input type="file" name="photo" class="form-control " id="floatingInput" >
                                </div>

                                <div class="form-group">
                                    <select name="barber_id" required
                                            class="form-select form-control form-select-lg mb-3"
                                            aria-label=".form-select-lg example" id="building">
                                        <option value="{{$services->barber_id}}"
                                                selected> {{$barber->barber_name}} </option>
                                        @foreach($barbers as $barber)
                                            @if( $services->barber_id != $barber->id )
                                                <option value="{{$barber->id}}">{{$barber->barber_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                                <input type="reset" class="btn btn-danger" value="Tozalash">
                            @endif
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

