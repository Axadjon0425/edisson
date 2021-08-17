@extends('layouts.backApp')
@section('content')
<div class="container-fluid">
    <div class="container">
      <h1 class=" text-center text-uppercase">bazaga maʼlumot qo‘shish</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-8">

                <form action="{{ route('shopAdmin.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                    <div class="form-group">
                        <label for="nomi">Nomi</label>
                        <input type="text" class="form-control" name="name" placeholder="Nomini kiriting" value="{{ old('name') }}">
                          @error('name')
                            <span class="text-danger" style="margin-top: -20px;">Nomni kiriting!</span>
                          @enderror
  
                    </div>

                    <div class="form-group">
                      <label for="matn">Matn</label>
                      <input type="text" class="form-control" name="text" placeholder="Matni kiriting" value="{{ old('text') }}">
                        @error('text')
                          <span class="text-danger" style="margin-top: -20px;">Matni kiriting!</span>
                        @enderror

                  </div>
                  
                    <div class="form-group">
                        <label for="narx">Narx</label>
                          <input type="text" class="form-control" id="narx" name="price" placeholder="Narxni kiriting" value="{{ old('price') }}">
                              @error('price')
                                <span class="text-danger" style="margin-top: -20px;">Narxni tog'ri kiriting!</span>
                              @enderror
                    </div>


                    <div class="form-group">
                      <label for="rasm">Rasm</label>
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="rasm" name="photo" value="{{ old('photo') }}">
                              <label class="custom-file-label" for="rasm"></label>
                                @error('photo')
                                  <span class="text-danger" style="margin-top: -20px;">Rasmni tog'ri yuklang!</span>
                                @enderror
                          </div>
                  </div>


                    <div class="modal-footer text-right" style="padding: 0;">
                        <button type="submit" class="btn btn-primary mt-4" style="margin: 0">Saqlash</button>
                    </div>
                  </form>
            </div>
      </div>
     
    </div>
   

</div>
@endsection