@extends('layouts.backApp')

@section('content')
   
<div class="table-btn">
  <div class="container-fluid">
    <div class="container">
      <h1 class="text-center">Mijozlar</h1>
      <a href="{{ route('client.add') }}" class="btn btn-outline-primary"><i class="far fa-plus"></i> Add</a>
  
      
      <table  class="table table-striped dataTable_staff" style="width:100%;">
          <thead>
              <tr>
                  <th>№</th>
                  <th>Nomi</th>
                  <th>Raqami</th>
                  <th>Kompaniya</th>
                  <th>Yaratilgan vaqt</th>
                  <th class="text-right">Harakatlar</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($client as $p)
              <tr>
                  <td>{{ ($loop->index+1)}}</td>
                  <td>{{ $p->name }}</td>
                  <td>{{ $p->phone }}</td>
                  <td>{{ $p->company }}</td>
                  <td>{{ $p->created_at }}</td>
                  <td class="text-right">
                    <div class="btn-group">

                      <a href="{{ route('client.edit', [$p->id]) }}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                      <button type="submit" class="btn btn-outline-danger"data-toggle="modal" data-target="#exampleModal{{ $p->id }}">
                        <i class="far fa-trash-alt"></i>
                      </button>
                      
                    </div>
                      <!--===========================DeletModal========================-->
                      <div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header" style="border: none">
                                <h5 class="modal-title text-danger" id="exampleModalLabel">Maʼlumotni rostdan ochirmoqchimiz?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" >
                                  <form action="{{ route('client.destroy', [$p->id]) }}" method="POST">                           
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
 
</div>

@endsection