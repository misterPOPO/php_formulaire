<h1> salut voici les messages de ma base de donnée </h1>


@foreach ($message as $message)

<p><a href="#">{{$message->id}}</a>
<a> a écrit :</a>{{$message->content}}</p>

@endforeach

