@extends('panel/layout')

@section('style')


    @endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            <legend>
                Nowe zgłoszenie
            </legend>
            {{ Form::open() }}
                <div class="form-group">
                    {{ Form::label('') }}
                </div>
            {{ Form::close() }}
        </div>
    </div>

    @endsection