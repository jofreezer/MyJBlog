@extends('layouts.authornavbar')

@section('content')
		<div class=container>
            <div style=" color:rgb(70, 69, 68)">
            <div class="col-md-6 offset-md-3">

                <h1 style="text-align: center">Contact Me</h1>
                <p>Email: dusejoffrey@gmail.com</p>
                <p>Phone: +247 71190595 / +254 7424795</p>
            
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                <i class="fa fa-copy"></i>
                <i class="fa fa-save"></i>
                <i class="fa fa-trash"></i>
                <i class="fa fa-home"></i>
            </div>

       
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1>Send Me a message here</h1>
                    <div class="card">        
                        <div class="card-header">
                           
                        </div>
                        <div class="card-body">
                           
                            @if(Session::has('success'))
                               <div class="alert alert-success">
                                 {{ Session::get('success') }}
                               </div>
                            @endif
                            {!! Form::open(['route'=>'contactus.save']) !!}
                            
                            @csrf
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Name:') !!}
                            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Full Name']) !!}
                            <span class=text-danger>{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('Email:') !!}
                            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                            <span class=text-danger>{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                            {!! Form::label('Message:') !!}
                            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                            <span class=text-danger>{{ $errors->first('message') }}</span>
                            </div>
                            <div class=form-group>
                            <button class="btn btn-secondary">Submit</button>
                            </div>
                            {!! Form::close() !!}
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        @endsection