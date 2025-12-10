{{-- resources/views/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to the AdminLTE dashboard.</p>
@stop

@section('css')
    {{-- extra CSS if needed --}}
@stop

@section('js')
    <script>console.log('adminlte loaded')</script>
@stop
