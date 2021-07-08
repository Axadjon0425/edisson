@extends('layouts.backApp')
@section('content')
<div class="container-fluid">
    <div class="container">
        <h1 class="text-center text-uppercase">tahrirlash</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('client.update', [ $client->id ]) }}" method="POST">

                  @csrf
                   {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="nomi">Nomi</label>
                        <input type="text" class="form-control" name="name" placeholder="Nomni kiriting*" value="{{$client->name}}">
                        @error('name')
                        <span class="text-danger" style="margin-top: -20px;">Nomini kiriting!</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="raqam">Raqami</label>
                        <input type="text" class="form-control" name="phone" placeholder="Raqamni kiriting*" value="{{$client->phone}}" id="phone">
                        @error('phone')
                        <span class="text-danger" style="margin-top: -20px;">Raqamni kiriting!</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kompaniya">Kompaniyani</label>
                        <input type="text" class="form-control" name="company" placeholder="Raqamni kiriting*" value="{{$client->company}}">
                        @error('company')
                        <span class="text-danger" style="margin-top: -20px;">Kompaniyani` kiriting!</span>
                        @enderror
                    </div>

                    <div class="text-right" style="padding: 0;">
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>    


@endsection