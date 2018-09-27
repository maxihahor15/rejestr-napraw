@extends('panel/layout')

@section('style')
    <style>
        .vertical-menu {
            width: 100%; /* Set a width if you like */
        }

        .vertical-menu a {
            background-color: #eee; /* Grey background color */
            color: black; /* Black text color */
            display: block; /* Make the links appear below each other */
            padding: 12px; /* Add some padding */
            text-decoration: none; /* Remove underline from links */
        }

        .vertical-menu a:hover {
            background-color: #ccc; /* Dark grey background on mouse-over */
        }

        .vertical-menu a.active {
            background-color: #064c96; /* Add a green color to the "active/current" link */
            color: white;
        }

        .vertical-menu a.active:hover {
            background-color: #5182b6;
        }
        .img-ot
        {
            background: url('{{URL::asset('img/bg1.jpg')}}');
            background-size: cover;
            display: block;
            min-height: 375px;
            height: auto;
        }
        .container
        {
            padding: 0;
        }
    </style>
    @endsection

@section('content')
    <div class="col-md-3">
        <div class="vertical-menu">
            <a href="#" class="active"><span class="glyphicon glyphicon-plus"></span>&nbsp Nowe zgłoszenie</a>
            <a href="#"><span class="glyphicon glyphicon-refresh"></span>&nbsp Zgłoszenia w toku</a>
            <a href="#"><span class="glyphicon glyphicon-ok"></span>&nbsp Zgłoszenia zakończone</a>
            <a href="#"><span class="glyphicon glyphicon-folder-open"></span>&nbsp Archiwalne</a>
        </div>
    </div>
    <div class="col-md-9 img-ot">

    </div>

    @endsection