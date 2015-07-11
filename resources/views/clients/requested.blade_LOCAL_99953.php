@extends('clients.app')
@section('content1')
<link rel="stylesheet" href="{{ asset('/css/bladestyle.css') }}" type="text/css">
<div class="clientFilterDiv" align="right">
				{!! Form::model($filters,['method'=>'GET', 'action' =>'ClientController@requested', 'class'=>'form-inline']) !!}
					Filter:  {!! Form::select('filter', array('name'=>'Name', 'state'=>'State', 'city'=>'City', 'gender'=>'Gender', 'talentCategory'=>'Talent Category', 'specificTalent'=>'Specific Talent', 'date'=>'Date'), null, ['class' => 'form-control', 'required', 'style'=>'width:2	0%', 'id'=>'filter']) !!}
					{!! Form::text('filterText', null, ['class'=>'form-control', 'id'=>'filterText']) !!}
					{!! Form::hidden('count', Input::get('count'), ['id' => 'hiddenViewCounter']) !!}
					{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}
			</div>
			<br>

<div class="container">
    <?php
    $counter=0;
?>
    <div class="row">
    @foreach ($requestClients as $requestClient)
    <?php
    $counter=$counter+1;
?>
    <div class="col-md-4">
            <div class="medium-thumb">
                @if($requestClient->personal_photo == "")
                <img src="{{asset('/images/profilepicture.png')}}" class="attachment-post-thumbnail wp-post-image" alt="KrishaJain6bw" />
                @else
                <img width="144" height="216" src="{{$requestClient->personal_photo}}" class="attachment-post-thumbnail wp-post-image" alt="KrishaJain6bw" />
                @endif
                <a href={{action('ClientController@requestedClientInfo', $requestClient->id)}}>{{$requestClient->fname." ".$requestClient->lname}}</a>
            </div>
        </div>   
    <?php
    if($counter>=3)
    {
        echo'</div>';
        echo'<div class="row">';
        $counter=0;       
    }
?>
    @endforeach
    </div>
        
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