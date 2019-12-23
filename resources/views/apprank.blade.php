@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default ">
                <div class="panel-heading text-center">
                    <h4>Загальний рейтинг студентів по всім предметам</h4>
                </div>
                <div class="panel panel-default">
                    <table class="table table-bordered">
                        <tbody>
                            <th>Id користувача</th>
                            <th>Прізвище користувача</th>
                            <th>Ім'я користувача</th>
                            <th>Середня оцінка за всі предмети</th>
                            @foreach ($mark as $colmark)
                            <tr>
                                <td>{{$colmark->id}}</td>
                                <td>{{$colmark->surname}}</td>
                                <td>{{$colmark->name}}</td>
                                <td>{{$colmark->avg}}</td>
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