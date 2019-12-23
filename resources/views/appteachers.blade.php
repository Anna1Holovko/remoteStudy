@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default ">
                <div class="panel-heading text-center">
                    <h1>Зареєстровані викладачі додатку</h1>
                    <h3>Всього:  {{ $count}} </h3>
                </div>
                <div class="panel panel-default">
                    <table class="table table-bordered">
                        <tbody>
                            <th>Прізвище</th>
                            <th>Ім'я</th>
                            <th>Пошта</th>
                            <th>Тип</th>
                            <th>Зареєстровано у додатку</th>

 @foreach ($appteachers as $htttwo)
                            <tr>
                         
                                <td>{{$htttwo->surname}}</td>
                                <td>{{$htttwo->name}}</td>
                                <td>{{$htttwo->email}}</td>
                                <td>{{$htttwo->role}}</td>
                                <td>{{$htttwo->created_at}}</td>

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