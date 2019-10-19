@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Editar Producto <b>{{ $product->name }}</b>
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary float-right">Regresar</a>
                </div>

                <div class="card-body">

                    <form action="{{ route('products.update',$product) }}" method="post">
                        @csrf @method('PUT')
                        @include('products.form')
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
