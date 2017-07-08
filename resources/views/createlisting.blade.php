@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="header-above-form">Create Listing <a href="/dashboard" class="pull-right btn btn-primary btn-xs">Go Back</a></h3>
                </div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'ListingsController@store', 'method'=>'POST']) !!}
                        {{ Form::bsText('name', '', ['placeholder' => 'Company Name ...']) }}
                        {{ Form::bsText('email', '', ['placeholder' => 'Company Email ...']) }}
                        {{ Form::bsText('website', '', ['placeholder' => 'Company Website ...']) }}
                        {{ Form::bsText('phone', '', ['placeholder' => 'Company Phone ...']) }}
                        {{ Form::bsText('address', '', ['placeholder' => 'Company Address ...']) }}
                        {{ Form::bsTextArea('bio', '', ['placeholder' => 'About this Business ...']) }}
                        {{ Form::bsSubmit('submit', '', ['class' => 'btn btn-default']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection