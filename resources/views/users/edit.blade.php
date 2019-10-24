@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Editar Datos del Usuario <b>{{ $user->name }}</b>
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary float-right">Regresar</a>
                </div>

                <div class="card-body">

                    <form action="{{ route('users.update',$user) }}" method="post">
                        @csrf @method('PUT')
                        @include('users.form')
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
