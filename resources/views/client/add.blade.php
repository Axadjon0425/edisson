@extends('layouts.backApp')

@section('content')

<div class="container-fluid">
    <div class="container">
      <h1 class=" text-center text-uppercase">bazaga maʼlumot qo‘shish</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <form action="{{ route('client.store') }} " method="POST">

                 @csrf

                    <div class="form-group">
                        <label for="nomi">Nomi</label>
                        <input type="text" class="form-control" name="name" placeholder="Nomni kiriting*" value="{{ old('name') }}">
                        @error('name')
                        <span class="text-danger" style="margin-top: -20px;">Nomini kiriting!</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="raqam">Raqami</label>
                        <input type="text" class="form-control" name="phone" placeholder="Raqamni kiriting*" value="{{ old('phone') }}" id="phone">
                        @error('phone')
                        <span class="text-danger" style="margin-top: -20px;">Raqamni kiriting!</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kompaniya">Kompaniya</label>
                        <input type="text" class="form-control" name="company" placeholder="Kompaniya kiriting*" value="{{ old('company') }}">
                        @error('company')
                        <span class="text-danger" style="margin-top: -20px;">Kompaniyani` kiriting!</span>
                        @enderror
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary mt-4" style="margin: 0">Saqlash</button>
                    </div>
                </form>
            </div>
      </div>
    </div>
</div>
@endsection