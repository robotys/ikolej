@extends('front.apel.master')

@section('content')

<section class="paper">
	<div class="container">
		<div class="col-sm-2 col-sm-offset-2">
			<ul class="menu">
				<li><a {!!(Request::segment(2) == 'intro') ? 'class="active"' : ''!!} href="/credits/intro">Introduction <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a {!!(Request::segment(2) == 'rules') ? 'class="active"' : ''!!} href="/credits/rules">Rules & Regulation <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a {!!(Request::segment(2) == 'eligibility') ? 'class="active"' : ''!!} href="/credits/eligibility">Eligibility <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a> </li>
				<li><a {!!(Request::segment(2) == 'awards') ? 'class="active"' : ''!!} href="/credits/awards">Awards of Credit <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a {!!(Request::segment(2) == 'fees') ? 'class="active"' : ''!!} href="/credits/fees">Fees <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a {!!(Request::segment(2) == 'process') ? 'class="active"' : ''!!} href="/credits/process">Process <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a href="#apply">Apply Now <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
				<li><a href="/contact-us">Contact Us <i class="fa fa-chevron-right pull-right" style="margin-top: 3px"></i></a></li>
			</ul>
		</div>
		<div class="col-sm-6 content-box">

			<h1><span>APEL FOR CREDITS:</span></h1>

			@if(Request::segment(2) == 'intro' OR Request::segment(2) == 'all')
				<h1>INTRODUCTION</h1>
				<p>APEL (C) is the award of credits for the prior experiential learning towards a course in an accredited programme of higher education provider (HEP). APEL (C) provides the mechanism to recognize the individual’s prior experiential learning that is relevant and specific to a course within a programme of study. The credit award granted on the basis of the knowledge and skills acquired through informal and non-formal learning. </p>

				<p>The justifications for the implementation of APEL (C) are as follows:</p>
				<ul>
					<li>To provide recognition for learning acquired from non-formal and informal sources</li>
					<li>To reduce the duplication of learning or learning of the same/similar content</li>
					<li>To encourage the participation of adults in higher education by recognizing their prior experiential in the form of credits awarded</li>
					<li>To potentially reduce the time and cost of completing a study programme</li>
				</ul>
			
				<br/>
			@endif

			@if(Request::segment(2) == 'rules' OR Request::segment(2) == 'all')
				<h1>RULES AND REGULATION</h1>
				<ul>
					<li>Credit will only be awarded against authenticated documentary evidence of learning and not for specific experiences. It is the achievement or outcomes of learning that is being recognized.</li>
					<li>APEL (C) cannot be used to retrieve a failed module.</li>
					<li>Decisions regarding the APEL (C) are an academic judgement. The APEL (C) process has the same status as any other assessment process in the University and follows parallel processes.</li>
					<li>The decision making process and the outcomes for APEL (C) claims will be transparent and demonstrably rigorous and fair. </li>
					<li>Collaborative partners delivering awards validated by a University will be expected to adhere to that University’s principles, procedures and processes for APEL (C).  </li>
					<li>APEL (C) can be implemented for all areas and levels of qualifications in the Malaysian Qualification Register (MQR) except for final year project-based subject and dissertations. For postgraduate level of study, the credit award is limited only to the courses in programmes conducted via coursework and mixed modes.</li>
					<li>APEL (C) can be confined to courses in programmes that have obtained at least provisional accreditation from MQA</li>
					<li>Courses that form part of the programme structure under professional bodies are subjected to acceptance by relevant professional bodies.</li>
				</ul>

				<br/>
			@endif

			@if(Request::segment(2) == 'eligibility' OR Request::segment(2) == 'all')
				<h1>ELIGIBILITY</h1>
				<p>Any learners (local & international) registered at Geomatika University College regardless of mode of entry; whether through conventional or APEL (A) route.</p>

				<br/>
			@endif

			@if(Request::segment(2) == 'awards' OR Request::segment(2) == 'all')
				<h1>AWARDS OF CREDIT</h1>
				<ul>
					<li>The award of credits through APEL (C) is in the form of credit transfer where it does not involve the transfer of grades. However, the credits awarded for the course will be counted towards the total credit requirement for graduation.</li>
					<li>The maximum percentage of credit transfer through APEL (C) is 30% of the total graduating credits of specific programme of study.</li>
					<li>For both Challenge Test and/or Portfolio Based Assessment, learners must achieve at least 50% of each course learning outcome.</li>
					<li>Credit transfer through APEL (C) can be an addition to the existing formal credit transfer.</li>
					<li>Credits awarded through APEL (C) can be transferred automatically to another programme within the same institution if the course for which credits have been awarded through APEL (C) has the same learning outcomes.</li>
					<li>The credits awarded must be equivalent to the credit value of the course applied for APEL (C). Award of partial credits will not be allowed.</li>
					<li>Credits awarded for a course are only applicable to the specific course applied for. Credits are not automatically applicable to pre-requisites (if any) of the specific course</li>
					<li>Assessment for credit award should be carried out separately for each course. *Credit award cannot be granted on a block basis. <br/> <small><i>*Example – Assessment for Accounting (I) course should be made separately with Accounting (II)</i></small></li>
					<li>The maximum credit transfer allowed through APEL (C) at various MQF levels is as below:</li>
				</ul>

				<br/>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Malaysian Qualification Framework (MQF)</th>
							<th>Minimum Graduating Credits</th>
							<th>30% from the minimum credits</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Level 8: Doctoral Degree <br/> <small><i>(Applicable only to coursework and mixed modes)</i></small></td>
							<td>80</td>
							<td>24</td>
						</tr>
						<tr>
							<td>Level 7: Master’s Degree <br/> <small><i>(Applicable only to coursework and mixed modes)</i></small></td>
							<td>40</td>
							<td>12</td>
						</tr>
						<tr>
							<td>Level 6: Bachelor’s Degree</td>
							<td>120</td>
							<td>36</td>
						</tr>
						<tr>
							<td>Level 4: Diploma</td>
							<td>90</td>
							<td>27</td>
						</tr>
						<tr>
							<td>Level 3: Certificate</td>
							<td>60</td>
							<td>18</td>
						</tr>
					</tbody>
				</table>

				<br/>
			@endif

			@if(Request::segment(2) == 'fees' OR Request::segment(2) == 'all')
				<h1>APEL (C) FEES</h1>
				
				<p>RM 50/CREDIT HOUR</p>

				<br/>
			@endif

			@if(Request::segment(2) == 'process' OR Request::segment(2) == 'all')
				
				<h1>APEL (C) PROCESS</h1>
				
				<p><img src="/assets/apel/credit-process.jpg" style="max-width: 400px"></p>
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

