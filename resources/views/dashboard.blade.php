@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading ">Dashboard <span class="pull-right"><a href="/listings/create" class="btn btn-success btn-xs">Add Listing</a></span></div>

                <div class="panel-body">
                    <h3 class="text-center header-above-form">Your Listings</h3>
                    @if(count($listings))
                        <table class="table table-striped text-left">
                            <tr>
                                <th>Company</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a class="btn btn-warning btn-sm" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method'=>'POST', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
