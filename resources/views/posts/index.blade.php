@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">
    <!-- Page Heading -->
    <h1 class="my-4" id="seriallist">Список сериалов</h1>

    <form action="posts/create">
        <div>
            <button type="submit" class="button is-link">Create </button>
        </div>
    </form>



<!-- Project One -->
    @foreach($serials as $serial)
    <div class="row" style="margin-top:40px;">
        <div class="col-md-5" >
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{ $serial->img}}" alt="" style="height: 480px; width: 350px">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{ $serial->s_name }}</h3>

            <p>{{ $serial->description }} </p>
            <a class="btn btn-outline-danger" style="margin-bottom: 10px;" href="/posts/{{ $serial->id }}">Смотреть</a>
            <br/>
            <ul class="list-inline">
                <li><i class="fas fa-align-left"></i></i> Жанр:  |   </li>
                <li><i class="fas fa-calendar-alt"></i></i> Дата выпуска | {{ $serial->realise_data }} </li>
                <li><i class="fas fa-globe-americas"></i> Страна:  |</li>
            </ul>
        </div>

    </div>
    @endforeach
</div>
@endsection
