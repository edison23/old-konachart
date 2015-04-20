<ul>
	@foreach ($seasons as $season)
		<li><a href="/season/{{$season->slug}}">{{ $season -> name }}</a></li>
	@endforeach
</ul>