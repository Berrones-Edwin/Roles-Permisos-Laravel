@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                {{ $role->id }}  | <b>{{ $role->name }}</b>     
                </div>

                <div class="card-body">

                    {{ $role->description }}     
                  
                </div>
                <div class="card-footer">
                    <a href="{{ route('roles.index') }}" class="btn btn-sm btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
