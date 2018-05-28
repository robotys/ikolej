@extends('front.apel.master')

@section('content')

<section class="paper">
	<div class="container">
		<div class="col-sm-6 content-box col-sm-offset-3">
			<h1 style="text-align: center">THANK YOU</h1>
			<p style="text-align: center">Your details has been sent to officer in charge. We will contact you for further process.</p>
			
		</div>
	</div>
</section>

{!!view('front.apel.form')!!}


<style>
.paper{
	text-align: justify;
}

.content-box > h1:first-child{
	margin-top: 0px;
}

h1 > span{
	font-size: 0.5em;
}
</style>

@endsection()

