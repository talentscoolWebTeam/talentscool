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
		
		
		<div class="col-xs-12" id="successMessage" style="display:none;">
			<div class="successAddMessage" id="successMessageBody">
			</div>
		</div>
		
		<div class="col-xs-12" id="failureMessage" style="display:none;">
			<div class="failureAddMessage" id="failureMessageBody">
			</div>
		</div>
			
		<div class="col-xs-12">&nbsp;</div>

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
		{!! Form::open(['class'=>'form-inline']) !!}
			<button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
			<div class="container">
				<div class="displayTagName">
					{!! Form::label('Tag Name: ', 'Tag Name: ') !!}
					{!! Form::text('name', null, ['class' => 'form-control tagField', 'required']) !!}
					{!! Form::Button('Add', ['class' => 'btn btn-success tagSubmit']) !!}
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</div>

<div class="deleteTagWrapper">
	<div class="deleteTagContent">
		{!! Form::open(['class'=>'form-inline']) !!}
			<button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
			<div class="container">
				<div class="displayTagName">
					{!! Form::label('Tag Name: ', 'Tag Name: ') !!}
					{!! Form::select('name', $tags, null, ['class' => 'form-control', 'required', 'style'=>'width:45%', 'id'=>'deleteTagName']) !!}
					{!! Form::Button('Delete', ['class' => 'btn btn-danger btn-sm tagDeleteSubmit']) !!}
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
	$('.tagField').keydown( function(e){
		if(e.keyCode == 13)
			return false;

	});
	$('.tagSubmit').click(function(){
		var token = $(this).parent().parent().parent().children().get(0).value;
		var name = $(this).parent().children().get(1).value;
		$.ajax({
			method:'POST',
			url:'/Tags',
			data: {
				"name": name,
				"_token" : token
			},
			dataType: 'text',
			success: function(responseData){
				var obj = JSON.parse(responseData);
				if(obj.result == 'success')
				{
					$('#failureMessage').fadeOut();
					$('#newTagWrapper').fadeOut();
					$('.tagField').val("");
					document.getElementById('tag_list').innerHTML+='<option value="' + obj.id +'">' + name + '</option>';
					$('#successMessage').css('visibility', 'visible').hide().fadeIn('slow');
					document.getElementById('successMessageBody').innerHTML = obj.message;
					document.getElementById('deleteTagName').innerHTML+='<option value="' + obj.id +'">' + name + '</option>';
				}
				else if(obj.result == 'failure')
				{
					$('#successMessage').fadeOut();
					$('#newTagWrapper').fadeOut();
					$('.tagField').val("");
					$('#failureMessage').css('visibility', 'visible').hide().fadeIn('slow');
					document.getElementById('failureMessageBody').innerHTML = obj.message;
				}
			}
		
			});
	});
	$('.tagDeleteSubmit').click(function(){
		var token = $(this).parent().parent().parent().children().get(0).value;
		var name = $(this).parent().children().get(1).value;
		$.ajax({
			method:'PUT',
			url:'/Tags',
			data: {
				"name": name,
				"_token" : token
			},
			dataType: 'text',
			success: function(responseData){
				var obj = JSON.parse(responseData);
				if(obj.result == 'success')
				{
					$('.deleteTagWrapper').fadeOut('slow');
					$('#failureMessage').fadeOut();
					$('#tag_list option[value="' + name + '"').remove();
					$('#deleteTagName option[value="' + name + '"').remove();
					$('#successMessage').css('visibility', 'visible').hide().fadeIn('slow');
					document.getElementById('successMessageBody').innerHTML = obj.message;
				}
			}
		
			});
	});
	
	</script>
@stop