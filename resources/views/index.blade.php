@extends('layouts.master')

@section('content')
    <h1>project management for Human being</h1>
    <p>The prego is simple</p>
    <p><img src="{{ asset('images/lock.bmp')}}"</p>
    <a class="btn btn-large btn-info" href="/auth/register">Sign Up</a>
    <p class="login">Already signed up?<a class="btn btn-large btn-info" 
                href="/auth/signin">Login</a></p>

@stop                