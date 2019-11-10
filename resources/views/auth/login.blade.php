@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! From::open(['route'=>'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>

                {!! Form::submit('Log in',[''=>'btn btn^primary btn-block']) !!}
            {!! From::close() !!}
            
            <p class="mt-2">New user? {!! link_to_route('singup.get','Sign up now') !!}</p>
        </div>
        
    </div>