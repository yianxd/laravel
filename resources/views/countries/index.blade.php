@extends('layouts.navbar')

@section('content')

<div class="container">

    <h4>Gestion De Pais</h4>
    <div class="row">
        <div class="col-xl-12">
            <form action="">
                <div class="form-row">
                    <div class="col-sm-4 my-1" >
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-auto my-1" >
                        <input type="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

<div class="cotainer">
    <div class="row">
        <h4>Gestion clientes</h4>
        <div class="col-lx-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Opciones
                            </th>
                            <th>
                                COUNTRY_CODE
                            </th>
                            <th>
                                COUNTRY_NAME
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($countries as $country)
                        <tr>
                            <td>{{$country->id}}</td>
                            <td>{{$country->country_code}}</td>
                            <td>{{$country->country_name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection