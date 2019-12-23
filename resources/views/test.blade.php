@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading text-center">
                    @foreach($quiz as $quiz)
                    <h2>{{$quiz->theme_name}}</h2>
                    @endforeach
                </div>

                <form class="" action="/theme/test/pass" method="post">
                    {{ csrf_field() }}
                    <ul class="list-group">
            <?php $i = 1 ?>            
                        @foreach($question_ids as $key)

                        @if($key->question_type == 'test')
                        <li class="list-group-item">
                            <label style="font-size: 16px;">Питання: {{$key->questions_text}}</label><br><br>
                            @else

                            @endif
                            <div class="row">
                                @foreach($test as $answer)

                                @if($answer->questions_id == $key->questions_id and $answer->question_type == 'test')

                                <div class="col-md-12">
                                    
                                        <input type="checkbox" name="{{$i}}" value="{{$answer->answer_correctness}}"
                                            >
                                        {{$answer->answers_text}}
                                    
                                </div>

                                @else

                                @endif

                                @endforeach
                                <?php $i++ ?> 
                            </div>
                           
                        </li>
                        @endforeach


                        @foreach($question_ids as $key)

                        @if($key->question_type == 'fill')
                        <li class="list-group-item"><label style="font-size: 16px;">Питання:
                                {{$key->questions_text}}</label><br><br>
                            @else

                            @endif

                            @foreach($test as $answer)


                            @if($answer->questions_id == $key->questions_id and $answer->question_type == 'fill')

                            <input type="text" name="{{$i}}" class="form-control" style="width: 200px;">
                            <input type="input" name="{{$i+1}}" value="{{$answer->answer_correctness}}"
                                style="display: none;">
                            <input type="input" name="{{$i+2}}" value="{{$answer->answers_text}}"
                                style="display: none;">
                            @else
                            @endif
                            @endforeach


                        </li>
                        @endforeach

                    </ul>
                    <br>

                    <button type="submit" name="submit" style="margin-left: 45%;margin-bottom: 20px;"
                        class="btn btn-primary btn-lg text-center ">Завершити</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection