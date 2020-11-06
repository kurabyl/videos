@extends('layouts.layouts')

@section('content')
    <div style="margin-top: 1%;"></div>

    <div class="notika-status-area mt-5">

        <div class="container">
            <a href="{{ url('list/1') }}" class="btn btn-primary" >
                Назад
            </a>
            @include('layouts.messages')
            <form action="{{ route('add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">ФИО</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ИИН</label>
                    <input type="text" class="form-control" name="passport">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Дисциплина</label>
                    <select name="discipline" id="" class="form-control ">
                        <option value="Сварка">Сварка</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Теория</label>
                    <input type="text" class="form-control" name="theory">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Практика</label>
                    <input type="text" class="form-control" name="practice">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Видео ссылка</label>
                    <input type="text" class="form-control" name="video_link">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Дата</label>
                    <input type="date" class="form-control" name="date_start">
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>


@endsection
