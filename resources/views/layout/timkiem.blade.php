@extends('layout.index')
@section('content')
<div class="content">
	@foreach($tour as $t)
	{{$t->tentour}}
	@endforeach
</div><!--End Content-->
@endsection