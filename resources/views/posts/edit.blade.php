@extends('layouts.app')

@section('content')

    <form method="post" action="/posts/{{ $serials->id}}">
        @method('PATCH')
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Название сериала</label>
            <textarea class="form-control" name="s_name"  id="exampleFormControlTextarea1" rows="3" required>{{ $serials->s_name }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3" required>{{ $serials->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Создать новый сериал</button>
    </form>



    <form method="POST" action="/posts/{{ $serials->id }}">
        @method('DELETE')
        @csrf
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Delete </button>
        </div>
    </div>
    </form>
@endsection

