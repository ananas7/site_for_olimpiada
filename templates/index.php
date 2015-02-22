<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
  <head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>Городская олимпиада по программированию ВГИ</title>

    <!-- Templates core CSS -->
	<link href="stylesheets/bootstrap_2.css" rel="stylesheet"> 
    <link href="stylesheets/application.css" rel="stylesheet"> 

    <!-- Favicons -->
  
		<link rel="shortcut icon" href="images/favicon/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>

		
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
   <!-- <script src="javascript/vendor/modernizr-2.7.1.min.js"></script> -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>
  <body class="index" id="to-top" data-spy="scroll" data-target="#myScrollspy">

     <!-- Jumbotron -->
    <header class="jumbotron magic100" role="banner">
      <div class="container">
		<div class="row magic">
			<image src="images/olimpiada.png" width="70%"/>
		</div>
		<div class="row magic">
			<div class="row">			
				<div><h1> Олимпиада по программированию<br>Волжского Гуманитарного Института<br>филиала ВолГУ</h1></div>
			</div><!-- row -->
			<br><br>
			<div class="row">
				 <a class="btn btn-danger" href="#section-1">Условия задач</a>
			</div>		
		</div>
      </div> <!-- /.container -->
    </header>
	<!-- /.jumbotron -->

    <!-- Services -->
    <section class="services-section magic100-f" id="section-1">
		<div class="container">
			<div class="row"><h1 align = "left" style="color:#969191;">string Info() {</h1></div><br>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<ul class="left-aligned">
						<li><span>Разбор олимпиады ВГИ по программированию</span></li>
						<li><span>28 февраля 2015 года, 13:30</span></li>
						<li><span><a class="local-link" href="http://olymp.vgi.volsu.ru/#section-5">Волжский Гуманитарный Институт</a></span></li>
						<li><span>Будут призы!</span></li>
					</ul>
				</div>
			</div>
			<div class="row"><h1 align = "left" style="color:#969191;">}</h1></div>
			<br><br>
			<a class="btn btn-danger" href="olymp2015.pdf">Скачать условия</a>
			<footer class="footer-section" role="contentinfo">
				<div class="container">
					<div class="row">
						<div  class="col-md-4">
							<p><strong>Обратная связь</strong><br>
							<a href="mailto:ilylomte7@gmail.com">Илья Ломтев</a><br>
							<a href="mailto:joni852963@gmail.com">Евгений Годунов</a>
						</div>
						<div class="col-md-4">
							<a href="http://vk.com/matfak_vgi"><image src="images/vk.png"/></a>
						</div>
						<div class="col-md-2"></div>			  
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</footer>
		</div> <!-- /.container -->
	</section>
	<!-- /.services-section -->


    <!-- Features -->
    <section class="features-section" id="section-2">			
			<div class="container">
			<h1 style="color:#969191;"> image[] Gallery() { </h1>
			<?php include("./php/gallery.php"); ?>
			<h1 style="color:#969191;"> } </h1>
		 </div> <!-- /.container -->

    </section>
	<!-- /.features-section -->	
	
	<!-- Map -->
	<section class = "features-section map" id="section-5" >
		<div class="container">
			<div class="row">
				<br>
				<a id="firmsonmap_biglink" href="http://maps.2gis.ru/#/?history=project/volgograd/center/44.80015936943,48.754263277867/zoom/17/state/widget/id/4644865396784417/firms/4644865396784417">Перейти к большой карте</a>
				<script charset="utf-8" type="text/javascript" src="http://firmsonmap.api.2gis.ru/js/DGWidgetLoader.js"></script>
				<script charset="utf-8" type="text/javascript">new DGWidgetLoader({"borderColor":"#a3a3a3","width":"900","height":"400","wid":"b0de3e33bf2ec3633c99ee5775815b54","pos":{"lon":"44.80015936943","lat":"48.754263277867","zoom":"17"},"opt":{"ref":"hidden","card":["name"],"city":"volgograd"},"org":[{"id":"4644865396784417"}]});</script>
				<noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
			</div>
		</div>
	</section>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpGridGallery.js"></script>
	<script>
		new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
	</script>
	
	</body>
</html>
