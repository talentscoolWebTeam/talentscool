@extends('landingApp')

@section('content')
	
<div class="" style="margin-top:100px;>
		<div class="col-md-12 landingDivWhoWeAre">
			<div class="col-md-12">
				<div class="col-md-9">
					<h1 class="landingPoint">WHO WE ARE</h1>
						<br>
						<p class="landingBody">
							 Headquartered in Los Angeles, Talentscool is a talent service that works with talents in music, film, fashion, visual arts, dance, and sports to find them opportunities and connect them to the various services they need for their careers. Being founded by both a musician and a pro-athlete, we know how hard it is to stand out in the entertainment industry. With all of the competition, we aim to give our clients ease knowing someone is on their side. 
						</p>  	
						<br><br>
				</div>
				<div class="col-md-3">
				</div>
			</div>
			
			<div class="col-md-12"">
				<div class="col-md-3">&nbsp;</div>
				<div class="col-md-9">
					<p class="landingBody">
					Through our global relationships with major/indie record labels, talent agencies, casting agencies, production companies, venues, art galleries, corporate sponsors, and much more, we are able to provide the best possible service to our clients. In addition, we recommend our clients to well-established vendor services ranging from publicists to agents to investors to entertainment lawyers and everything in between. We cater to the needs of our clients in every way possible.
					</p>
					<br><br><br><br>
				</div>
			</div>
			<div class="col-md-12">
				{!! HTML::image('/images/logoT.png', null, array('class'=>'tailLogo')) !!}
			</div>
		</div>
</div>
	


@stop