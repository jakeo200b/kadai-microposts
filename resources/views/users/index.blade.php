@extends('layouts.app')

@section('content')
    @include('users.users',['users'=>$users])
    
    <div>{{$userid}}</div>
@endsection