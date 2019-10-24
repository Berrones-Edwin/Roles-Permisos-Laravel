@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Listado Usuario
                      
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class="table table-stripped table-hover">
                       <thead>
                            <tr>    
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                       </thead>
                       <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>

                                        <div class="float-right">
                                            @can('users.show')
                                                <a href="{{ route('users.show',$user->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                            @endcan
                                            @can('users.edit')
                                                <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-outline-info">Editar</a>
                                            @endcan
                                            @can('users.destroy')
                                                <form action="{{ route('users.destroy',$user->id) }}" style="display:inline;" method="post">
                                                    @csrf  @method('delete')
                                                    <input type="submit"  class="btn btn-sm btn-danger"  value="Eliminar">
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                       </tbody>
                   </table>
                    {{ $users->render() }}
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
