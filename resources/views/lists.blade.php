@extends('layouts.layouts')

@section('content')
    <div style="margin-top: 1%;"></div>

    <div class="notika-status-area mt-5">
        <div class="container">
            <a href="{{ url('add') }}" class="btn btn-primary" >
                Добавить
            </a>
            <div class="row">

                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ФИО</th>
                        <th>ИИН</th>
                        <th>Дисциплина</th>
                        <th>Теория</th>
                        <th>Практика</th>
                        <th>Видео</th>
                        <th>Дата финала</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($lists->count() > 0)
                        @foreach($lists as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->passport }}</td>
                                <td>{{ $item->discipline }}</td>
                                <td>{{ $item->theory }}</td>
                                <td>{{ $item->practice }}</td>
                                <td><a href="{{ $item->video_link }}" target="_blank"> Видео </a></td>
                                <td>{{ $item->date_start }}</td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
