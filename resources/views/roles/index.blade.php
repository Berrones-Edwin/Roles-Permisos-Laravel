@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Listado Roles
                    @can('roles.create')
                        <a href="{{ route('roles.create') }}" class="btn btn-sm btn-outline-primary float-right">Crear</a>
                    @endcan
                      
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
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>

                                        <div class="float-right">
                                            @can('roles.show')
                                                <a href="{{ route('roles.show',$role->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                            @endcan
                                            @can('roles.edit')
                                                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-sm btn-outline-info">Editar</a>
                                            @endcan
                                            @can('roles.destroy')
                                                <form action="{{ route('roles.destroy',$role->id) }}" style="display:inline;" method="post">
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
                    {{ $roles->render() }}
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
