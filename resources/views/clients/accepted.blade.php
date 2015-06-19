@extends('clients.app')
@section('content1')
<div class="clientFilterDiv" align="right">
				{!! Form::model($filters, ['method'=>'GET', 'action' =>'ClientController@accepted', 'class'=>'form-inline']) !!}
					Filter:  {!! Form::select('filter', array('name'=>'Name', 'state'=>'State', 'city'=>'City', 'gender'=>'Gender', 'talentCategory'=>'Talent Category', 'specificTalent'=>'Specific Talent', 'tag'=>'Tag', 'date'=>'Date'), null, ['class' => 'form-control', 'required', 'style'=>'width:20%', 'id'=>'filter']) !!}
					{!! Form::text('filterText', null, ['class'=>'form-control','id'=>'filterText']) !!}
					{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
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
@if($filters)
	{!! $acceptedClients->appends($filters)->render() !!}
@else
	{!! $acceptedClients->render() !!}
@endif
@stop
@section('tail1')
$(document).ready(function()
{
	$('.acceptedClientsButton').css('background-color', '#404040');
});
@stop