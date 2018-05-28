@extends('front.apel.master')

@section('content')

<section class="paper">
	<div class="container">
		<div class="col-sm-6 content-box col-sm-offset-3">
			<h1 style="text-align: center">CONTACT US</h1>
			<p style="text-align: center">Walk in to GUC APEL (C) Centre to find out more about APEL (C):</p>
			
			<table class="table table-bordered table-striped">
				<tbody>
					<tr>
						<td>Address:</td>
						<td>
							APEL (C) Centre<br/>
							Geomatika University College<br/>
							Lot 5-5-7, 5th Floor Lift 3<br/>
							Wisma Prima Peninsula<br/>
							Jalan Setiawangsa 11, Taman Setiawangsa<br/>
							54200 Kuala Lumpur
						</td>
					</tr>
					<tr>
						<td>Map:</td>
						<td>
							<a href="" class="btn btn-success btn-sm">Open in Google Maps</a> &nbsp; &nbsp;
							<a href="" class="btn btn-info btn-sm">Open in Waze</a>
							<br/>
							<br/>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.677266260587!2d101.74098731471237!3d3.1793493538529756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc379ac2ccf4e9%3A0xd803129d3923c61b!2sGeomatika+University+College!5e0!3m2!1sen!2smy!4v1527418468785" style="height: 300px; width: 100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							<br/>
						</td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td>
							03-42524576
						</td>
					</tr>
					<tr>
						<td>Fax:</td>
						<td>
							03-42603559
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>
							{{'apelc@geomatika.edu.my'}}
						</td>
					</tr>
				</tbody>
			</table>
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

