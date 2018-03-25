@extends('front.apelmaster')

@section('content')
<section class="hero" style="background-image: url('/assets/apel/banner.jpeg');">
	<div class="copy">
		<h1>MAKE YOUR SKILL ELIGIBLE TO THE WORLD</h1>
		<p>Get better job offer or pursue higher education with APEL skill accreditation by Geomatika University College</p>
		<a href="#apply" class="btn btn-danger btn-lg">Apply Now</a>
	</div>
</section>

<section class="grey">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>WHAT IS APEL ACCREDITATION?</h2>
				
				<p>APEL Accreditation is a simple process to check your skill level and convert it into grading acknowledge by government as valid. Think it as grading your skills and experience to reflect standard GPA being used in higher education.</p>

				<p>The grading will be done by government authorities in education and will follow strict standards and test. APEL purpose is to help skilled manpower in selected fields to be able to reflect their skilled more correctly with current education system.</p>
				
			</div>
		</div>
	</div>
</section>

<section class="red">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>BENEFITS</h2>

				<div class="row">
					<div class="col-sm-4 box">
						<i class="fa fa-gem"></i>
						<h4>Better Job Offer</h4>
						<p>Accreditation approve your skill into eligible standards that employer can refer to in appraisal thus improve your job offer.</p>
					</div>
				
					<div class="col-sm-4 box">
						<i class="fa fa-rocket"></i>
						<h4>Pursue Higher Education</h4>
						<p>With standard grading, you can apply for better placement in higher education to pursue excellence in your profesional skill field.</p>
					</div>
				
					<div class="col-sm-4 box">
						<i class="fa fa-trophy"></i>
						<h4>Acknowledged by Government Bodies</h4>
						<p>APEL is acknowledge by authorities thus made it valuable addition besides your current abilities to demonstrate your skill.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="grey">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>REQUIREMENTS</h2>
				<p>Requirements is really simple! First is: Candidate (local & international) must be a registrant at Geomatika University College regardless of mode of entry; whether through conventional or APEL (A) route.</p>

				<p>Second is fees of RM 50 for each credit hour accreditted.</p>

				<p>That is all!</p>
			</div>
		</div>
	</div>
</section>


<section class="">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>ACCREDITATION PROCESS</h2>
				
				<div class="row">
					<div class="col-sm-2 box">
						<i class="fa fa-check-square"></i>
						<h4>#1 Pre Registration</h4>
					</div>
					<div class="col-sm-2 box">
						<i class="fa fa-bullhorn"></i>
						<h4>#2 Procedure Briefing</h4>
					</div>
					<div class="col-sm-2 box">
						<i class="fa fa-edit"></i>
						<h4>#3 Self Accessment Exercise</h4>
					</div>
					<div class="col-sm-2 box">
						<i class="fa fa-sign-in-alt"></i>
						<h4>#4 Submit Application</h4>
					</div>
					<div class="col-sm-2 box">
						<i class="fa fa-calendar-check"></i>
						<h4>#5 Complete Test & Challenges</h4>
					</div>
					<div class="col-sm-2 box">
						<i class="fa fa-flag-checkered"></i>
						<h4>#6 Results & Follow up</h4>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="black" id="apply">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>APPLY NOW</h2>
				<p>Complete form below and click [Submit]</p>

				<form method="post">
					<div class="row">
						<div class="col-sm-12">
							<br/>
							<label>Name</label>
							<input type="text" class="form-control">
							<br/>
						</div>
						<div class="col-sm-12">
							<label>ID Type</label>
							<select class="form-control">
								<option>Warganegara (IC)</option>
								<option>International (Passport)</option>
							</select>
							<br/>
						</div>
						<div class="col-sm-12">
							<label>IC / Passport</label>
							<input type="text" class="form-control">
							<br/>
						</div>
						<div class="col-sm-12">
							<label>Phone</label>
							<input type="text" class="form-control">
							<br/>
						</div>
						<div class="col-sm-12">
							<label>Email</label>
							<input type="text" class="form-control">
							<br/>
						</div>
						<div class="col-sm-12">
							<label>&nbsp;</label><br/>
							<input type="submit" class="btn btn-block btn-danger">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection()