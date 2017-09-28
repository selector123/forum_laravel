@extends('layouts.layout')
<?php #переопределили секцию и вызвали родителя?>
@section('navbar')
@parent
@endsection
@section('header')
@parent
@endsection
@section('content')
@include('default.content')
@endsection