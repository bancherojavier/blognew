@extends('dashboard.master')

@section('content')

        

            <div class="form-group">
                <label for="title">Titulo</label>
                <input readonly type="text" class="form-control" name="title" id="title" value="{{ $post->title}}">
            </div>

            <div class="form-group">
                <label for="url_clean">URL</label>
                <input readonly type="text" class="form-control" name="url_clean" id="url_clear" value="{{ $post->url_clean }}">
            </div>

            <a href="{{ route('category.index')}}" class="btn btn-primary" role="button">Volver</a>
    
@endsection


