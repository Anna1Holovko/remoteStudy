@extends('layouts.appadmin')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default ">
                <div class="panel-heading text-center">
                    <h1>Зареєстровані студенти додатку </h1>
                    <h3>Всього:  {{ $count}} </h3>

                </div>
                <div class="panel panel-default">
                    <table class="table table-bordered">
                        <tbody>
                            <th>Id користувача</th>
                            <th>Прізвище</th>
                            <th>Ім'я</th>
                            <th>Пошта</th>
                            <th>Тип</th>
                            <th>Зареєстровано у додатку</th>
  
                          @foreach ($appusers as $htt)
                            <tr>
                                <td>{{$htt->id}}</td>
                                <td>{{$htt->surname}}</td>
                                <td>{{$htt->name}}</td>
                                <td>{{$htt->email}}</td>
                                <td>{{$htt->role}}</td>
                                <td>{{$htt->created_at}}</td>
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
