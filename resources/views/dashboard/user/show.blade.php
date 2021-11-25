@extends('dashboard.master')

@section('content')

        

            <div class="form-group">
                <label for="name">Titulo</label>
                <input readonly type="text" class="form-control" name="name" id="name" value="{{ $user->name}}">
            </div>

            <div class="form-group">
                <label for="surname">Apellido</label>
                <input readonly type="text" class="form-control" name="surname" id="surname" value="{{ $user->surname}}">
            </div>

            <a href="{{ route('user.index')}}" class="btn btn-primary" role="button">Volver</a>
    
@endsection


