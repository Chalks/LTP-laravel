@extends('app')

@section('content')

<h2>Leagues</h2>

<ul>
	@foreach($leagues as $league)
		<li>
			<a href="{{ route('leagues.show', $league->slug) }}">{{ $league->title }}</a>
		</li>
	@endforeach
</ul>


@endsection