@extends('layouts.navbar')

@section('content')
<div class="container w-50 border p-4 mt-4">
    <form action="{{ route('country.store') }}" method="POST">
        @csrf

        @if (session('success'))
            <h6 class="">{{session('success')}}</h6>
        @endif
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Codigo de pais</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="country_code" value="{{ old('country_name') }}"
          @error('country_code')
              value="{{old('country_code')}}"
          @enderror>
          @error('country_code')
          <h6 class="alert alert-dange p2 mt-2">{{$message}}</h6>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nombre de pais</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="country_name"
            @error('country_name')
                value="{{old('country_name') }}"
            @enderror>
            @error('country_name')
                <h6 class="alert alert-dange p2 mt-2">{{$message}}</h6>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
 @endsection