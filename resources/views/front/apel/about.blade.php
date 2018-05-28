@extends('front.apel.master')

@section('content')

<section class="paper">
	<div class="container">
		<div class="col-sm-2 col-sm-offset-2">
			<ul class="menu">
				<li><a {!!(Request::segment(2) == 'center') ? 'class="active"' : ''!!} href="/about/center">APEL Center <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a {!!(Request::segment(2) == 'service') ? 'class="active"' : ''!!} href="/about/service">Our Service <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a href="#apply">Apply Now <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a href="/contact-us">Contact Us <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
			</ul>
		</div>
		<div class="col-sm-6 content-box">


			@if(Request::segment(2) == 'center' OR Request::segment(2) == 'all')
				<h1><span>ABOUT US: APEL (C) CENTRE</span></h1>
				<h1>BACKGROUND</h1>
				<p>Geomatika University College’s (GUC) APEL (C) Centre is designed to promote and support Accreditation Prior Experiential Learning – credit award for learners. This Centre responsible in managing, monitoring, develop, maintaining and exercising any matters in regards to APEL (C).</p>

				<p>Accreditation Prior Experiential Learning (APEL) is the recognition by the University, for its academic purposes of prior learning that has taken place elsewhere and prior to a student commencing their studies at the University. APEL has the capacity to make a significant contribution to Higher Education’s remit to widen participation, promote social inclusion, employability, and partnership working with business, community organizations and other higher education providers nationally and internationally.</p>

				<h1>OBJECTIVES</h1>

				<ul>
					<li>To provide recognition for learning acquired from non-formal and informal sources</li>
					<li>To reduce the duplication of learning or learning of the same/similar content</li>
					<li>To encourage participation of adults in higher education by recognizing their prior experiential learning in the form of credits awarded; and</li>
					<li>To encourage continuous learning and promotes the positive aspects of an individual’s learning experience.</li>
				</ul>
			
				<h1>FUNCTIONS</h1>

				<ul>
					<li>To provide GUC and relevant stakeholders with essential information pertaining to the processes and procedures in the implementation of APEL (C)</li>
					<li>To outline the policies on the implementation of APEL (C)</li>
					<li>To develop, arrange and process the assessment instruments used to award credits</li>
					<li>To develop, maintain and exercise APEL (C) application procedures to learner and other stakeholders</li>
					<li>To ensure an effective, transparent and quality-assured practice of APEL (C) that will instill confidence in the outcomes of the APEL (C) processes.</li>

				</ul>
			
				<br/>
			@endif

			@if(Request::segment(2) == 'service' OR Request::segment(2) == 'all')
				<h1><span>ABOUT US:</span></h1>
				<h1> OUR SERVICES</h1>
				<ul>
					<li>APEL (C) Application and Process</li>
					<li>APEL (A) intermediate person for application (only for potential student to enroll with GUC)</li>
				</ul>

				<br/>
			@endif

		</div>
	</div>
</section>

{!!view('front.apel.form')!!}


<style>
.paper{
	text-align: justify;
}
.content-box{
	border-left: 1px #eee solid;
}

.content-box > h1:first-child{
	margin-top: 0px;
}

ul.menu{
	margin: 0;
	padding: 0;
	margin-top: 100px;
	/*position: fixed;*/
}

.menu li{
	list-style: none;
}

.menu li a{
	/*background: #eee;*/
	display: block;
	padding: 10px 12px;
	border-bottom: #eee 1px solid;
	color: #444;
	transition: all 0.5s;
}

.menu li a:hover, .menu li a.active{
	text-decoration: none;
	background: #000;
	color: #eee;
}

h1 > span{
	font-size: 0.5em;
}
</style>

@endsection()

