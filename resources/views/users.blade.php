@foreach($user as $i)
<h1>{{ $i->name}}</h1>
<h2>{{$i->email}}</h2>
@endforeach
