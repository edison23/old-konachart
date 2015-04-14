<?php $i=1 ?>
@if (strpos($link_arr->$l_id, ','))
	@foreach (explode(',', $link_arr->$l_id) as $link)
		<a target="_blank" href="{{$link}}">#{{ $i++ }}</a>
	@endforeach
@else
	<a target="_blank" href="{{$link_arr->$l_id}}">#{{$i}}</a>
@endif