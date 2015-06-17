@extends('clients.userInfo')
@section('tags')
	<h2 style="margin-left:20px">Tags</h2>
	{!! Form::open(['action'=>array('ClientController@acceptClient'), 'style' => 'display:inline']) !!}
	<div class="col-xs-12">
		<div class="col-xs-12">
			<b>Tags:</b>
			<button type="button" class="btn btn-success btn-sm"  id="addNewTag"	>
  				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create new tag
			</button>
			<button type="button" class="btn btn-danger btn-sm"  id="deleteTag"	>
  				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete tag
			</button>
		</div>
		<div class="col-xs-12">&nbsp;</div>
		@if(Session::has('AddSuccess'))
			<div class="col-xs-12">
				<div class="successAddMessage">
				<div>
					<button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
				</div>
				{{ Session::get('AddSuccess') }}	
				</div>
			</div>
			<div class="col-xs-12">&nbsp;</div>
		@elseif(Session::has('DeleteSuccess'))
			<div class="col-xs-12">
				<div class="successAddMessage">
				<div>
					<button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
				</div>
				{{ Session::get('DeleteSuccess') }}	
				</div>
			</div>
			<div class="col-xs-12">&nbsp;</div>
		@elseif(Session::has('AddError'))
			<div class="col-xs-12">
				<div class="failureAddMessage">
				<div>
					<button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
				</div>
				{{ Session::get('AddError') }}	
				</div>
			</div>
			<div class="col-xs-12">&nbsp;</div>
		@endif
		<div class="col-xs-12">
			{!! Form::select('tags[]', $tags, null, ['style'=>'color:black', 'id'=>'tag_list', 'class' => 'form-control', 'multiple']); !!}	
		</div>
	</div>
	<div class="col-xs-12">&nbsp;</div>
	
	<div class="col-xs-7 col-xs-offset-5 ">
		{!! Form::hidden('status', '1') !!}
		{!! Form::hidden('id', $client->id) !!}
		<button type="submit" class="btn btn-success btn-bg"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Accept</button>
		<a href="{{url('/clients/requested')}}"><button type="button" class="btn btn-danger btn-bg"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Cancel</button></a>
	</div>	
    {!! Form::close() !!}
@stop

<div id="newTagWrapper">
	<div class="newTagContent">
		{!! Form::open(['action' => 'TagController@store','class'=>'form-inline']) !!}
			<button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
			<div class="container">
				<div class="displayTagName">
					{!! Form::label('Tag Name: ', 'Tag Name: ') !!}
					{!! Form::text('name', null, ['class' => 'form-control tagField', 'required']) !!}
					{!! Form::Submit('Add', ['class' => 'btn btn-success']) !!}
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</div>

<div class="deleteTagWrapper">
	<div class="deleteTagContent">
		{!! Form::open(['action' => 'TagController@delete', 'method'=>'PUT','class'=>'form-inline']) !!}
			<button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
			<div class="container">
				<div class="displayTagName">
					{!! Form::label('Tag Name: ', 'Tag Name: ') !!}
					{!! Form::select('name', $tags, null, ['class' => 'form-control', 'required', 'style'=>'width:45%']) !!}
					{!! Form::Submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</div>





@section('tail')
	<script>
	$('#addNewTag').click(function(){
		$('#newTagWrapper').css('visibility', 'visible').hide().fadeIn('slow');
	});
	$('#deleteTag').click(function(){
		$('.deleteTagWrapper').css('visibility', 'visible').hide().fadeIn('slow');
	});
	$('.close').click(function(){
		$(this).parent().parent().parent().fadeOut('slow');
		$('.tagField').val("");
	});
	</script>
@stop