@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.services.index')}}" class="btn btn-primary">Servicesga qaytish</a>
                <div class="row container mt-4">
                    <table class=" table table-bordered border-primary ">
                        <tr>
                            <th>Servis nomi</th>
                            <td>{{$services->services_name}}</td>
                        </tr>
                        <tr>
                            <th>Narxi</th>
                            <td>{{$services->cost}}</td>
                        </tr>
                        <tr>
                            <th> Sartarosh  Id </th>
                            <td>{{$services->barber_id}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
