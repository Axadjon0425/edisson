@extends('layouts.backApp')

@section('content')
   
<div class="container-fluid">
    <div class="table-btn">
       <h1 class="text-center">Do'kon</h1>
        <a href="{{ route('shopAdmin.create') }}" class="btn btn-outline-primary"  style="z-index: 1;"><i class="far fa-plus"></i> Add</a>
    
        
        <table  class="table table-striped dataTable_staff" style="width:100%;">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Nomi</th>
                    <th>Matn</th>
                    <th>Narxi</th>
                    <th>photo</th>
                    <th>Sana</th>
                    <th class="text-right">Harakatlar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shop as $p)
                <tr>
                    <td class="align-middle">{{ ($loop->index+1)}}</td>
                    <td class="align-middle">{{ $p->name }}</td>
                    <td class="align-middle">{{ $p->text }}</td>
                    <td class="align-middle">{{ $p->price." so'm" }}</td>
                    <td class="align-middle">
                      <a href="{{asset('upload/shop/'.$p->photo)}}" data-fancybox="gallery">
                        <img src="{{asset('upload/shop/'.$p->photo)}}" alt="" style="width: 100px; height: 80px;">
                        
                      </a>
                    </td>
                    <td class="align-middle">{{ $p->created_date }}</td>
                    <td class="text-right align-middle">
                      <div class="btn-group">

                        <a href="{{ route('shopAdmin.edit', ['shopAdmin' => $p->id]) }}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                        <button type="submit" class="btn btn-outline-danger"data-toggle="modal" data-target="#modalDelete{{ $p->id }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                      </div>
                        <!--===========================DeletModal========================-->
                        <div class="modal fade" id="modalDelete{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header" style="border: none">
                                <h5 class="modal-title" id="exampleModalLabel">{{$p->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p class="text-danger text-left">Maʼlumotni rostdan ochirmoqchimiz?</p>
                                  <form action="{{ route('shopAdmin.destroy', ['shopAdmin' => $p->id] ) }}" method="POST">                           
                                      @csrf
                                      {{ method_field('DELETE') }}
                                      <div class="" style="border: none">
                                          <button type="submit" class="btn btn-danger">Xa</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Yoq</button>
                                        </div>
                                  </form>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                       
                      
                    </td>
                    
                
                </tr>
                @endforeach
              
            
            </tbody>
        </table>
    </div>

</div>

@endsection