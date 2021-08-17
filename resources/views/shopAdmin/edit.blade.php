@extends('layouts.backApp')
@section('content')
<div class="container-fluid">
    <div class="container">
        <h1 class=" text-center text-uppercase">tahrirlash</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-8">
        
                <form action="{{ route('shopAdmin.update', ['shopAdmin' => $shop->id ]) }}" method="POST" enctype="multipart/form-data">
                  @method('PUT')  
                  @csrf
                  {{ method_field('PUT') }}
    
                  <input type="hidden" name="photo_hidden" value="{{ $shop->photo }}">
    
                    <div class="form-group">
                        <label for="nomi">Nomi</label>
                        <input type="text" class="form-control" name="name" placeholder="Nomini kiriting" value="{{ $shop->name }}">
                    </div>
                    @error('name')
                      <span class="text-danger" style="margin-top: -20px;">Nomni kiriting!</span>
                    @enderror

                    <div class="form-group">
                      <label for="matn">Matn</label>
                      <input type="text" class="form-control" name="text" placeholder="Matni kiriting" value="{{ old('text') }}">
                        @error('text')
                          <span class="text-danger" style="margin-top: -20px;">Matni kiriting!</span>
                        @enderror

                  </div>

                    <div class="form-group">
                        <label for="narx">Narx</label>
                        <input type="text"  class="form-control "  name="price" placeholder="Narxni kiriting" value="{{ $shop->price }}">
    
                        
                              @error('price')
                                <span class="text-danger" style="margin-top: -20px;">Narxni tog'ri kiriting!</span>
                              @enderror
                    </div>
    
                    <div class="form-group">
                      <label for="rasm">Rasm</label>
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="rasm" name="photo" value="{{ old('photo') }}">
                              <label class="custom-file-label" for="rasm">{{ $shop->photo }}</label>
                                @error('photo')
                                  <span class="text-danger" style="margin-top: -20px;">Rasmni tog'ri yuklang!</span>
                                @enderror
                          </div>
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