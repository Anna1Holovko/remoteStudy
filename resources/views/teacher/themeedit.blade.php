@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="/teacher/themes/update/{{$teachTheme->theme_id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nameThemeInput">Назва теми</label>
                            <div class="form-group">
                            </div>
                            @foreach($topic as $topic)
                            <input type="text" name="theme_name" class="form-control" value="{{$topic->theme_name}}">
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="textThemeInput">Зміст</label>
                            <textarea id="text" name="theme_text" class="form-control"
                                value="Введите текст">{{$topic->theme_text}}</textarea>
                        </div>
                        <input type="text" name="users_id" value="{{Auth::user()->id}}" style="display: none;">
                        <h1 class="text-center">Питання по темі</h1>

                        <!--ВОПРОС 1-->
                        <div class="form-group">
                            <?php $i = 1 ?>
                            @foreach($questions as $key)
                            <label for="nameThemeInput">Питання {{$i}}</label>
                            <input type="text" name="q{{$i}}" class="form-control" required=""
                                value="{{$key->questions_text}}">
                            <input type="text" name="question_id{{$i}}" value="{{$key->questions_id}}"
                                style="display: none;">
                            <br>
                            @if($key->question_type == 'test')
                            <?php $j = 1 ?>
                            @foreach($answers as $answer)
                            @if($answer->questions_id == $key->questions_id)

                            <div class="col-md-3">
                                <input type="text" name="a{{$j}}{{$i}}" class="form-control"
                                    style="width:90%;display:inline;" required="" value="{{$answer->answers_text}}">
                                <input type="text" name="answer_id{{$j}}{{$i}}" value="{{$answer->answers_id}}"
                                    style="display: none;">
                                @if($answer->answer_correctness==1) <input class="form-check-input" checked="checked"
                                    style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox"
                                    name="ca{{$j}}{{$i}}" value="1" id="defaultCheck1">
                                @else <input class="form-check-input"
                                    style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox"
                                    name="ca{{$j}}{{$i}}" value="1" id="defaultCheck1">
                                @endif

                            </div>
                            <?php $j++ ?>
                            @else
                            @endif
                            @endforeach
                            @else
                            @endif
                            <div class="row">
                                @if ($answer->questions_id == $key->questions_id and $answer->question_type == 'fill')
                                <div class="col-md-1 text-right">
                                    <label>Відповідь: </label>
                                </div>
                                <div class="col-md-3">


                                    <input type="text" name="a1{{$i}}" class="form-control" style="display:inline;"
                                        value="{{$answer->answers_text}}" required="">
                                    <input type="text" name="answer_id{{$i}}" value="{{$answer->answers_id}}"
                                        style="display: none;">

                                </div>
                                @else
                                @endif
                            </div>

                            @if ($key->question_type == 'accordance')
                            <?php $k=1;
                            $j = 1;
                            $a = array('А', 'Б', 'В'); ?>
                            @foreach($acc as $accs)

                            <div class="row">
                                <div class="col-md-1 text-right" style="padding-top: 7px;">
                                    {{$a[$j-1]}}.</div>
                                <div class="col-md-3">
                                    <input type="text" name="LP{{$k}}" class="form-control" value="{{$accs->LP}}"
                                        required="">
                                    <br></div>
                                <div class="col-md-1 text-right" style="padding-top: 7px;">
                                    {{ $j }}.</div>
                                <div class="col-md-3">
                                    <input type="text" name="RP{{$k}}" class="form-control" value="{{$accs->RP}}"
                                        required="">
                                    <br>
                                </div>
                                <div class="col-md-2" style="display: none;">
                                    <input type="text" name="LA{{$k}}" class="form-control" value="{{$accs->LA}}"
                                        required="">
                                    <br></div>
                                <div class="col-md-1 text-right" style="padding-top: 7px;">
                                    {{$a[$j-1]}}.</div>
                                <div class="col-md-2">
                                    <input type="text" name="RA{{$k}}" class="form-control" value="{{$accs->RA}}"
                                        required="">
                                    <br>
                                </div>
                                <input type="text" name="accordance_id{{$k}}" value="{{$accs->accordance_id}}"
                                    style="display: none;">
                            </div>
                            <?$j++; ?>
                            <?$k++?>
                            @endforeach
                            @else
                            @endif
                            <?php $i++; ?>
                            @endforeach
                            <br>
                            <button type="submit" class="btn btn-primary text-center"
                                style="margin-top: 20px;">Зберегти</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection