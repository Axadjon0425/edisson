@extends('layouts.backApp')
@section('content')
    
<div class="container-fluid">
    <div class="container">
        <h1 class=" text-center text-uppercase">tahrirlash</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <form action="{{ route('ourBlog.update', [ $ourBlog->id ]) }}" method="POST" enctype="multipart/form-data">
                
                    @csrf
                    {{ method_field('PUT') }}
      
                    <input type="hidden" name="photo_hidden" value="{{ $ourBlog->photo }}">
      
                      <div class="form-group">
                          <label for="nomi">Nomi</label>
                          <input type="text" class="form-control" name="name" placeholder="Nomini kiriting" value="{{ $ourBlog->name }}">
                      </div>
                      @error('name')
                        <span class="text-danger" style="margin-top: -20px;">Nomni kiriting!</span>
                      @enderror
      
                      <div class="form-group">
                          <label for="matn">Matn</label>
                            <input type="text" class="form-control" id="matn" name="text" placeholder="Matnni kiriting" value="{{ $ourBlog->text }}">
                                @error('description')
                                  <span class="text-danger" style="margin-top: -20px;">Matnni kiriting!</span>
                                @enderror
                      </div>
      
      
                      <div class="form-group">
                        <label for="photo">Rasm</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="rasm" name="photo" value="{{ old('photo') }}">
                                <label class="custom-file-label" for="rasm">{{ $ourBlog->photo }}</label>
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