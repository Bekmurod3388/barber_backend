@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Contact ni tahrirlash</h1></div>
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


                    <form action="{{route('admin.contact_as.update',$contacts_as->id)}}" method="POST" accept-charset="UTF-8">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" value="{{$contacts_as->phone}}" class="form-control" id="phone" placeholder="+99890000000">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{$contacts_as->address}}" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$contacts_as->email}}" class="form-control" id="email" placeholder="Email...">
                        </div>
                        <div class="form-group">
                            <label for="lattitude">Lattitude</label>
                            <input type="text" name="lattitude" value="{{$contacts_as->lattitude}}" class="form-control" id="lattitude" placeholder="lattitude">
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input type="text" name="longitude" value="{{$contacts_as->longitude}}" class="form-control" id="longitude" placeholder="longitude">
                        </div>






                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

