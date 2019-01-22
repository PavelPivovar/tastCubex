@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <h4>Форма обратной связи </h4>
            <form action="{{route('connect.store')}}" method="post">
                {{--<input type="hidden" name="user_id" value="{{$mass->id or ''}}">--}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Тема:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Тема сообщения">
                </div>
                <div class="form-group">
                    <label for="body">Сообщение:</label>
                    <textarea class="form-control" name="body" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Выбрать файл</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <button type="submit" class="btn btn-info">Отправить сообщение</button>
            </form>
        </div>
    </div>
@endsection


