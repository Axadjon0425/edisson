@extends('layouts.backApp')

@section('content')
<div class="container-fluid">
    <div class="container">
        <h1 class="text-center text-uppercase">tahrirlash</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.password_update') }}" method="POST" class="js_password_update_from">

                  @csrf
                  {{-- {{ method_field('PUT') }} --}}
                    <div class="form-group">
                        <label for="username">Foydalanuvchi nomi</label>
                        <input type="text" class="form-control" name="username" placeholder="Foydalanuvchi nomi kiriting*" value="{{ $username }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="parol">Parol</label>
                        <input type="password" class="form-control" name="password" placeholder="Parol kiriting*">
                        <span class="text-danger error_password" style="margin-top: -20px;"></span>
                        
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirm" placeholder="Parol qayta kiriting*">
                        <span class="text-danger error_password_confirm" style="margin-top: -20px;"></span>
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