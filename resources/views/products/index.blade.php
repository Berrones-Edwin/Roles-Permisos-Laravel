@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Listado Productos
                    @can('products.create')
                        <a href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary float-right">Crear</a>
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
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>

                                        <div class="float-right">
                                            @can('products.show')
                                                <a href="{{ route('products.show',$product->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                            @endcan
                                            @can('products.edit')
                                                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-sm btn-outline-info">Editar</a>
                                            @endcan
                                            @can('products.destroy')
                                                <form action="{{ route('products.destroy',$product->id) }}" style="display:inline;" method="post">
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
                    {{ $products->render() }}
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
