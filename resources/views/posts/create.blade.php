@extends('layouts.app')

@section('content')

<form method="post" action="/posts">

    {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Название сериала</label>
            <textarea class="form-control" name="s_name" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Создать новый сериал</button>
    </form>
@endsection
