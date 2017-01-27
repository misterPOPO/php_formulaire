@extends('template')

@section('content')
    <h2>Resultats du formulaire</h2>

<p><a href="#">{{$news->id}}</a>
<a> a écrit :</a>{{$news->Content}}</p>


    <h3>Title</h3>
    <p>{{$news['title']}}</p>

    <h3>Content</h3>
	<p>{{$news['content']}}</p>
	
@endsection