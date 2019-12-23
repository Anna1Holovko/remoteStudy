@extends('layouts.appadmin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default ">
                <div class="panel-heading text-center">
                    <h4>Результати тестів</h4>
                </div>
                <div class="panel panel-default">
                    <table class="table table-bordered">
                        <tbody>
                            <th>Прізвище користувача</th>
                            <th>Ім'я користувача</th>
                            <th>Пошта</th>
                            <th>Назва тесту</th>
                            <th>Оцінка</th>
                            <th>Дата проходження тесту</th>

                            @foreach ($appmarks as $htm)
                            <tr>
                                <td>{{$htm->surname}} </td>
                                <td>{{$htm->name}}</td>
                                <td>{{$htm->email}}</td>
                                <td>{{$htm->theme_name}}</td>
                                <td>{{$htm->testing_mark}}</td>
                                <td>{{$htm->testing_date}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection