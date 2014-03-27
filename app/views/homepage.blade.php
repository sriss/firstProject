@extends('layouts.master')

@section('page-title')
    Fitness Site Homepage
@stop

@section('meta')
    charset="UTF-8"
@stop
@section('nav-bar')
<div><h1>This is supposed to be the master navigation bar.</h1></div>
@stop

@section('content')
<div><p>This is my body content.</p></div>
<div><img src="{{asset('assets/images/snorlax.jpg')}}" alt="snorlax" style="height: 50%; width: 50%;"></div>
<?php phpinfo(); ?>
@stop
