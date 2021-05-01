@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop



@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <p>login as user</p>
@stop

@section('footer')
<div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.0
</div>
<strong>CopyRight &copy; {{date('Y')}}
    <a href="#" target="_blank">naufal fahkri</a>.</strong>All Right reserved
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop