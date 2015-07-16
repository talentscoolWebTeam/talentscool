@extends('clients.app')
@section('content1')

<div class="clientFilterDiv" align="right">
				{!! Form::model($filters,['method'=>'GET', 'action' =>'ClientController@requested', 'class'=>'form-inline']) !!}
					Filter:  {!! Form::select('filter', array('name'=>'Name', 'state'=>'State', 'city'=>'City', 'gender'=>'Gender', 'talentCategory'=>'Talent Category', 'specificTalent'=>'Specific Talent', 'date'=>'Date'), null, ['class' => 'form-control', 'required', 'style'=>'width:2	0%', 'id'=>'filter']) !!}
					{!! Form::text('filterText', null, ['class'=>'form-control', 'id'=>'filterText']) !!}
					{!! Form::hidden('count', Input::get('count'), ['id' => 'hiddenViewCounter']) !!}
					{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}
			</div>
			<br>
<table class="table table-bordered">
	<tr>
		<th style="text-align:center; vertical-align:middle">Name</th>
		<th style="text-align:center; vertical-align:middle">Talent Category</th>
		<th style="text-align:center; vertical-align:middle">Specific Talent</th>
		<th style="text-align:center; vertical-align:middle">View</th>
	</tr>
	@foreach ($requestClients as $requestClient)
		<tr class="tbody">
			<td style="text-align:center">{{$requestClient->fname . " " . $requestClient->lname}}</td>
		@if(!is_null($requestClient->talents))
			@if($requestClient->talents == "[]")
				<td style="text-align:center">None</td>
				<td style="text-align:center">None</td>
			@else
				@foreach($requestClient->talents as $talent)
						<td style="text-align:center"> {{ $talent->category }}</td>
						<td style="text-align:center"> {{ $talent->specific_talent }}</td>
				@endforeach
			@endif
		@else
				<td style="text-align:center">None</td>
				<td style="text-align:center">None</td>
		@endif
		<td style="text-align:center"><a href={{action('ClientController@requestedClientInfo', $requestClient->id)}}> <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>View</button></a></td>
		</tr>
	@endforeach
</table>
<div class="col-xs-12 form-inline">
	{!! Form::label('Number of Contents: '); !!}
	{!! Form::select('count', array('5'=>'5', '10'=>'10', '25'=>'25', '100'=>'100'), Input::get('count'), ['style'=>'color:black', 'class'=>'form-control', 'id'=>'viewCounter'] ) !!}
</div>
{!! $requestClients->render() !!}

@stop
@section('tail1')
<script>
$(document).ready(function()
{
	$('.requestedClientsButton').css('background-color', '#404040');
});
$('#viewCounter').change(function(){
	var url = window.location.href;
	var e = document.getElementById('viewCounter');
	
	var hidden = document.getElementById('hiddenViewCounter');
	hidden.value = e.options[e.selectedIndex].text;
	
	if(url.indexOf("?") ==	 -1)
		url = url+"?";
	if(url.indexOf("&count") > -1)
		url = url.substring(0, url.indexOf("&count=") + 7) + e.options[e.selectedIndex].text;
	else
		url = url+"&count="+e.options[e.selectedIndex].text; 
	window.location = url;
});
</script>

@stop