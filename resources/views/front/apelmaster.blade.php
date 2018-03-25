<!DOCTYPE html>
<html>
<head>
	<title>APEL GUC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/fontawesome-all.css">

	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Raleway:300,500,900');

		body{
			font-family: Raleway, sans-serif;
			font-weight: 300;
		}

		h1,h2,h3, .brand{
			font-weight: 900;
		}

		.navbar{
			border-radius: 0px;
		}

		.hero{
			color: #FFF;
			background-size : cover;
			height: 500px; margin-top: -20px;
			padding: 40px;
		}

		.hero .copy{
			float: left;
			margin-top: 80px;
			margin-left: 80px;
			width: 500px;
			background: rgba(0,0,0,0.5);
			padding: 20px;
		}

		.hero .copy h1{
			margin-top: 0px;
		}

		.box{
			text-align: center;
		}

		.box i{
			font-size: 3em;
		}

		section{
			padding: 80px 0px;
		}

		h2{
			text-align: center;
			margin-top: 0px;
			margin-bottom: 20px;
		}

		footer{
			background: #000;
			text-align: center;
			color: #999;
			font-size: 0.8em;
			padding: 20px;
		}

		.red, .orange, .yellow{
			background: #F00;
			color: #FFF;
		}

		.yellow{
			background: #FF0;
		}

		.grey{
			background: #eee;
		}
		.black{
			background: #000;
			color: #fff;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      	<img src="/assets/apel/logo-apelguc.svg" style="height:20px; float: left;"/> &nbsp; <b>APELGUC</b>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/apel-center">APEL Center</a></li>
            <li><a href="/our-service">Our Services</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">APEL for Admission <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/admission/intro">Introduction</a></li>
            <li><a href="/admission/process">Process</a></li>
            <li><a href="/admission/application">Application</a></li>
            <li><a href="/admission/fees">Fees</a></li>
            <li><a href="/admission/eligibility">Eligibility</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">APEL for Credits <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/credits/intro">Introduction</a></li>
            <li><a href="/credits/process">Process</a></li>
            <li><a href="/credits/application">Application</a></li>
            <li><a href="/credits/fees">Fees</a></li>
            <li><a href="/credits/eligibility">Eligibility</a></li>
          </ul>
        </li>

        <li><a href="/contact-us">Contact Us</a></li>

        &nbsp;
        &nbsp;
        &nbsp;
        <a href="#apply" class="btn btn-sm btn-danger navbar-btn">Apply Now</a>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')

<footer>
	All Rights Reserved &copy; Geomatika University College 2018. Powered by iKolej.com
</footer>


</body>
</html>