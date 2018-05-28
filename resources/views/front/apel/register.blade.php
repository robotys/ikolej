@extends('front.apel.master')

@section('content')

<section class="paper">
	<div class="container">
		<div class="col-sm-10 content-box col-sm-offset-1">
			<h1 style="text-align: center">Register</h1>
			<p style="text-align: center">Complete the form and click submit:</p>
			<br/>
			<br/>
			<br/>
			<form method="post" action="/register">
				{!!csrf_field()!!}
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Citizenship</label>
							<input type="text" value="{{$request->citizenship}}" disabled class="form-control"/>
							<input type="hidden" name="citizenship" value="{{$request->citizenship}}" class="form-control"/>

						</div>
						<div class="form-group">
							<label>NRIC / Passport / Nationality ID</label>
							<input type="text" value="{{$request->idno}}" disabled class="form-control"/>
							<input type="hidden" name="idno" value="{{$request->idno}}" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Country</label>
							@if($request->citizenship == 'nonmalaysian')
								<input type="text" name="country" value="" class="form-control"/>
							@else
								<input type="text" value="Malaysia" disabled class="form-control"/>
								<input type="hidden" name="country" value="Malaysia" class="form-control"/>
							@endif
						</div>
						<div class="form-group">
							<label>Fullname</label>
							<input type="text" name="fullname" value="" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="number" name="age" value="" class="form-control"/>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" value="" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Postcode / Zipcode</label>
							<input type="number" name="postcode" value="" class="form-control"/>
						</div>
						<div class="form-group">
							<label>State</label>
							<input type="text" name="state" value="" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Contact No</label>
							<input type="number" name="contact_no" value="" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Email Address</label>
							<input type="email" name="email" value="" class="form-control"/>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>How did you find us?</label>
							<br/>
							<input type="checkbox" name="how_find"/> Friends / Family <br/>
							<input type="checkbox" name="how_find"/> Printed Advertising <br/>
							<input type="checkbox" name="how_find"/> Social Media <br/>
							<input type="checkbox" name="how_find"/> Radio/TV <br/>
							<input type="checkbox" name="how_find"/> Other Students <br/>
							<input type="checkbox" name="how_find"/> Exhibition <br/>
							<input type="checkbox" name="how_find"/> Workplace <br/>
							<input type="checkbox" name="how_find"/> Other <br/>
							<br/>
							<br/>
							<p><input type="checkbox" checked> I understand the terms and aggree to provide my information in accordance to the PDPA notice. (Read the PDPA notice here)</p>
							
							<p><input type="submit" value="Submit" class="btn btn-block btn-danger"></p>
						</div>
					</div>


			</form>
		</div>
	</div>
</section>


<style>
.paper{
	text-align: justify;
}

.input-group{
	margin-bottom: 30px;
}

.content-box > h1:first-child{
	margin-top: 0px;
}

h1 > span{
	font-size: 0.5em;
}
</style>

@endsection()

