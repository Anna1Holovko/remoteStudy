@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-body">
          <form action="/teacher/themes/newtheme/create" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nameThemeInput">Назва теми</label>
              <input type="text" name="theme_name" class="form-control" placeholder="Введіть назву теми">
            </div>
            <div class="form-group">
              <label for="textThemeInput">Зміст</label>
              <textarea id="text" name="theme_text" class="form-control" placeholder="Введіть текст"></textarea>
            </div>

            <input type="text" name="users_id" value="{{Auth::user()->id}}" style="display: none;">


            <h1 class="text-center">Питання по темі</h1>
            <!--ВОПРОС 1-->
            <div class="form-group">
              <label for="nameThemeInput">Питання 1</label>
              <input type="text" name="q1" class="form-control" placeholder="Введіть питання 1" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a11" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca11" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a21" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca21" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a31" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca31" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a41" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca41" value="1" id="defaultCheck1">
              </div>
            </div>

            <!--ВОПРОС 2-->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Питання 2</label>
              <input type="text" name="q2" class="form-control" placeholder="Введіть питання 2" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a12" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca12" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a22" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca22" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a32" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca32" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a42" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca42" value="1" id="defaultCheck1">
              </div>
            </div>

            <!--ВОПРОС 3-->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Питання 3</label>
              <input type="text" name="q3" class="form-control" placeholder="Введіть питання 3" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a13" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca13" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a23" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca23" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a33" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca33" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a43" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca43" value="1" id="defaultCheck1">
              </div>
            </div>

            <!--ВОПРОС 4-->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Питання 4</label>
              <input type="text" name="q4" class="form-control" placeholder="Введіть питання 4" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a14" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 1" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca14" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a24" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 2" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca24" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a34" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 3" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca34" value="1" id="defaultCheck1">
              </div>
              <div class="col-md-3"><input type="text" name="a44" class="form-control" style="width:90%;display:inline;"
                  placeholder="Варіант 4" required="">
                <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);"
                  type="checkbox" name="ca44" value="1" id="defaultCheck1">
              </div>
            </div>

            <!--ВОПРОС 5 ПОДСТАНОВКА -->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Питання 5</label>
              <input type="text" name="q5" class="form-control" placeholder="Введіть питання 5" required="">
              <br>
              <div class="col-md-3"><input type="text" name="a15" class="form-control" style="display:inline;"
                  placeholder="Правильна відповідь ..." required="">

              </div>

            </div>

            <!--ВОПРОС 6 СООТВЕТСТВИЕ -->
            <div class="form-group">
              <br><br>
              <label for="nameThemeInput">Питання 6</label>
              <input type="text" name="q6" class="form-control" placeholder="Введіть питання 6" required="">
              <br>
              <?$k=1;
                            $j = 1;
                            $a = array('А', 'Б', 'В'); ?>

              @for($b = 0; $b < 3; $b++ ) <div class="row">
                <div class="col-md-1 text-right" style="padding-top: 7px;">
                  {{@$a[$j-1]}}.</div>
                <div class="col-md-3">
                  <input type="text" name="LP{{@$k}}" class="form-control" value="" required="">
                  <br></div>
                <div class="col-md-1 text-right" style="padding-top: 7px;">
                  {{ @$j }}.</div>
                <div class="col-md-3">
                  <input type="text" name="RP{{@$k}}" class="form-control" value="" required="">
                  <br>
                </div>
                <div class="col-md-2" style="display: none;">
                  <input type="text" name="LA{{@$k}}" class="form-control" value="{{@$j}}" required="">
                  <br></div>
                <div class="col-md-1 text-right" style="padding-top: 7px;">
                  {{@$a[$j-1]}}.</div>
                <div class="col-md-2">
                  <input type="text" name="RA{{@$k}}" class="form-control" value="" required="">
                  <br>
                </div>
                <input type="text" name="accordance_id{{@$k}}" value="" style="display: none;">
            </div>
            <? $j++; ?>
            <?$k++?>
            @endfor
        </div>
        <br>
        <button type="submit" class="btn btn-primary text-center" style="margin-top: 10px;">Зберегти</button>
        </form>

      </div>
    </div>
  </div>
</div>
</div>
@endsection