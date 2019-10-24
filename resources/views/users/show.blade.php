@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                {{ $user->id }}  | <b>{{ $user->name }}</b>     
                </div>

                <div class="card-body">

                    {{ $user->email }}     
                  
                </div>
                <div class="card-footer">
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
