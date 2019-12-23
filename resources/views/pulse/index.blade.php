@extends('layouts.appchrt')
@section('content')

{{ $pulses }}

<div style="width:50%;">
{{!! $chart->container() !!}}
</div>



        <div>  <a class="btn btn-primary btn-xl js-scroll-trigger" href="/">Профіль</a></div>


@endsection