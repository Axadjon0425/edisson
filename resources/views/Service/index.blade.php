@extends('layouts.backApp')

@section('content')
   
<div class="container-fluid">
    
    <div class="table-btn">
       <h1 class="text-center">Xizmatlar</h1>
        <a href="{{ route('service.add') }}" class="btn btn-outline-primary" ><i class="far fa-plus"></i> Add</a>
    
        
        <table id="dataTable_staff" class="table table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Nomi</th>
                    <th>Matn</th>
                    <th>Tipi</th>
                    <th>Sana</th>
                    <th>photo</th>
                    <th class="text-right">Harakatlar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($service as $p)
                <tr>
                    <td class="align-middle">{{ ($loop->index+1)}}</td>
                    <td class="align-middle">{{ $p->name }}</td>
                    <td class="align-middle">{{ $p->description }}</td>
                    <td class="align-middle">{{ $p->type }}</td>
                    <td class="align-middle">{{ $p->created_at }}</td>
                    <td class="align-middle">
                      <a href="{{asset('upload/services/'.$p->photo)}}" data-fancybox="gallery">
                        <img src="{{asset('upload/services/'.$p->photo)}}" alt="" style="width: 100px; height: 80px;">
                        
                      </a>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('service.edit', [$p->id]) }}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                        <button type="submit" class="btn btn-outline-danger"data-toggle="modal" data-target="#modalDelete{{ $p->id }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
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
                                  <form action="{{ route('service.destroy', [$p->id] ) }}" method="POST">                           
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