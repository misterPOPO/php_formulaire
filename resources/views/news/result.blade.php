@extends('template')
@section('content')
  
{{-- {{$news->title}}{{$news->content}} --}}


    <h3>Title</h3>
    <p>{{$news['title']}}</p>

    <h3>Content</h3>
	<p>{{$news['content']}}</p>

	<div class="row">
            <div class="col-md-6">
                <a href="" class="btn btn-info">voir message</a>
                <a href="" class="btn btn-primary">Edit message</a>
                <button href="" type="submit" class="btn btn-danger">supprime message</button>
            </div>        
	</div>



	
@endsection