@extends('clients.userInfo')
@section('tags')
<style>
.select2-choices{
    display:-webkit-inline-box;
    max-width: 1000px;   //  <--- set the max width you want
}
</style>

	<h2 style="margin-left:20px">Tags
	</h2>
	<div class="col-xs-12 editTags">
		<div class="col-xs-12"">
			<div class="col-xs-12"">
			{!! Form::open(['method'=>'patch']) !!}
				{!! Form::select('tags[]', $tags, $clientTag, ['id'=>'tag_list', 'class' => 'form-control col-xs-12 ', 'multiple', 'style'=>'widh:500px']) !!}
				<br>
				<div class="col-xs-offset-5">
				{!! Form::Submit('Edit', ['class' => 'btn btn-success']) !!}
				<a href="{{ url('/clients')}}">{!! Form::Button('cancel', ['class' => 'btn btn-danger', 'id'=>'cancelEdit']) !!}</a>
				</div>
			{!! Form::close() !!}
			</div>
		</div>
	</div>
	
@stop
