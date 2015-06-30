@extends('clients.app')
@section('content1')
<div class="clientFilterDiv" align="right">
				{!! Form::model($filters, ['method'=>'GET', 'action' =>'ClientController@accepted', 'class'=>'form-inline']) !!}
					<div class="col-xs-12" style="float:right">
						Filter:  {!! Form::select('filter', array('name'=>'Name', 'state'=>'State', 'city'=>'City', 'gender'=>'Gender', 'talentCategory'=>'Talent Category', 'specificTalent'=>'Specific Talent', 'tag'=>'Tag', 'date'=>'Date'), null, ['class' => 'form-control', 'required', 'id'=>'filter']) !!}
							{!! Form::text('filterText', null, ['class'=>'form-control','id'=>'filterText']) !!}
							{!! Form::hidden('count', Input::get('count'), ['id' => 'hiddenViewCounter']) !!}
							{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
						
					</div>
				{!! Form::close() !!}
			</div>
<br>
<table class="table table-bordered">
<tr>
<th rowspan="2" style="text-align:center; align:center; vertical-align:middle">Name</th>
<th colspan="3" style="text-align:center">Service Desire</th>
<th rowspan="2" style="text-align:center; align:center; vertical-align:middle">View</th>
<tr>
	<th style="text-align:center">Representation</th>
	<th style="text-align:center">Opportunity</th>
	<th style="text-align:center">Service</th>
</tr>

</tr>

@foreach($acceptedClients as $acceptedClient)
	<tr class="tbody">
		<td style="text-align:center">{{ $acceptedClient->fname . " " . $acceptedClient->lname }}</td>
		@if(!is_null($acceptedClient->service))
			<td style="text-align:center">
				@if(empty($acceptedClient->service->representation))
					None
				@else
					{{ $acceptedClient->service->representation }}
				@endif
			</td>
			<td style="text-align:center">
				@if(empty($acceptedClient->service->opportunity))
					None
				@else
					{{ $acceptedClient->service->opportunity }}
				@endif
			</td>
			<td style="text-align:center">
				@if(empty($acceptedClient->service->service))
					None
				@else
					{{ $acceptedClient->service->service }}
				@endif
			</td>
		@else
			<td style="text-align:center">None</td>
			<td style="text-align:center">None</td>
			<td style="text-align:center">None</td>
		@endif
		<td style="text-align:center"><a href={{action('ClientController@acceptedClientInfo', $acceptedClient->id)}}> <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>View</button></a></td>
	</tr>
@endforeach
</table>
<div class="col-xs-12 form-inline">
	{!! Form::label('Number of Contents: '); !!}
	{!! Form::select('count', array('5'=>'5', '10'=>'10', '25'=>'25', '100'=>'100'), Input::get('count'), ['style'=>'color:black', 'class'=>'form-control', 'id'=>'viewCounter'] ) !!}
</div>
{!! $acceptedClients->render() !!}
@stop
@section('tail1')
<script>
$(document).ready(function()
{
	$('.acceptedClientsButton').css('background-color', '#404040');
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