@extends('layouts.backApp')

@section('content')
   
<div class="container-fluid" style="padding: 0 10px;">
    <div class="table-btn">
       <h1 class="text-center">Do'kon mijozlar</h1>
        <table  class="table table-striped dataTable_staff" style="width:100%;">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Maxsulot nomi</th>
                    <th>Mijoz Ismi</th>
                    <th>Mijoz Familyasi</th>
                    <th>Mijoz Raqami</th>
                    <th>Maxsulot narxi</th>
                    <th>Sotib olingan vaqt</th>
                    <th class="text-right">Korish</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shopuser as $p)
                <tr>
                    <td class="align-middle">{{ ($loop->index+1)}}</td>
                    <td class="align-middle">{{ $p->name }}</td>
                    <td class="align-middle">{{ $p->firstname }}</td>
                    <td class="align-middle">{{ $p->lastname}}</td>
                    <td class="align-middle">{{ $p->phone}}</td>
                    <td class="align-middle">{{ $p->price}}</td>
                    <td class="align-middle">{{ $p->created_at }}</td>
                    <td class="text-right">
                    @if ($p->status== 1)
                    <span class="badge bg-danger" style="color: white">Ko‘rilmadi</span>
                        <a href="" class="btn btn-outline-primary text-center check" data-url="{{ route('shopUser.orderStatusUpdate', [$p->id]) }}">
                            <i class="fas fa-check"></i>
                        </a>
                    @endif
                    @if ($p->status == 0)
                    <span class="badge bg-primary" style="color: white">Ko‘rildi</span>
                    @endif
                    </td>                 
                </tr>
                @endforeach
              
            
            </tbody>
        </table>
    </div>

</div>

@endsection