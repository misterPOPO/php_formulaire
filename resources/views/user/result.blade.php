@extends('template')
@section('content')
    <h2>Resultats du formulaire</h2>

    <h3>Firstname</h3>
    <p>{{$user['firstname']}}</p>

    <h3>Lastname</h3>
	<p>{{$user['lastname']}}</p>
	
    <h3>Gender</h3>
    <p>{{$user['gender']}}</p>

    <h3>Newsletter</h3>
    <p>{{$user['newsletter']}}</p>

    <h3>mood</h3>
    <p>{{$user['mood']}}</p>
    
@endsection
