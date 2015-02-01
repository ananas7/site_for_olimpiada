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

    <!-- Side nav nav-side-nav nav-stacked-->
    <div class="side-nav" id="myScrollspy">
      <ul class="nav nav-tabs nav-stacked" role="tablist">
		<li><a class="tooltip-side-nav" href="#to-top" title="" data-original-title="Начало" data-placement="left"><image src="images/favicon/home1.png"/></a></li>
         <li><a class="tooltip-side-nav" href="#section-1" title="" data-original-title="Регистрация" data-placement="left"><image src="images/favicon/pen1.png"/></a></li>
        <li><a class="tooltip-side-nav" href="#section-2" title="" data-original-title="Галерея" data-placement="left"><image src="images/favicon/image1.png"/></a></li>       
        <li><a class="tooltip-side-nav" href="#section-4" title="" data-original-title="Список" data-placement="left"><image src="images/favicon/list-view1.png"/></a></li>
		<li><a class="tooltip-side-nav" href="#section-5" title="" data-original-title="Карты" data-placement="left"><image src="images/favicon/location1.png"/></a></li>
      </ul>
    </div>
	<!-- /.side-nav -->



     
    <!-- Jumbotron -->
    <header class="jumbotron magic100" role="banner">
      <div class="container">
		<div class="row magic">
			<image src="images/olimpiada.png" width="70%"/>
		</div>
		<div class="row magic">
			<div class="row">			
				<div><h1> Олимпиада "программирование"<br>Волжского Гуманитарного Института (ф) ВолГУ</h1></div>
			</div><!-- row -->
		</div>
      </div> <!-- /.container -->
    </header>
	<!-- /.jumbotron -->

    <!-- Services -->
    <section class="services-section magic100" id="section-1">
		<div class="container">
			<div class="col-md-5">
				<h1 align = "left">string Info() {</h1>
				<div class="col-md-1"></div>
				<div class="col-md-11">
					<p align = "left">Ежегодная олимпиада по программированию для школьников от Волжского Гуманитарного Института состоится 21 февраля 2015 года. Приглашаются учащиеся 8 &ndash; 11 классов, окончательная регистрация участников будет проходить <a href="#section-5">в&nbsp;главном&nbsp;корпусе&nbsp;ВГИ</a> с 09:00 до 10:00. Ждем всех желающих! Призы для победителей и участников!</p>
				</div>
				<h1 align = "left">}</h1>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-5">
				<h4 class="text-center"></h4>					
				<form class="sign-in-up-form"   method="post" action="php\save_user.php" role="form">
				
					<!-- Input 0 -->
					<div class="form-group">
						<input class="form-control" pattern="^[А-Я][а-я]{1,}$" name="LastName" type="text" placeholder="Фамилия (Иванов)" required>
					</div>
					<div class="form-group">
						<input class="form-control" pattern="^[А-Я][а-я]{1,}$" name="FirstName" type="text" placeholder="Имя (Игорь)" required>
					</div><!-- /.form-group -->

					<!-- Input 1 -->
					<div class="form-group">
						<input class="form-control" pattern="^[1-9][0-9]{1,2}$" name="School" type="text" placeholder="Школа (24)" required>
					</div> <!-- /.form-group -->

					<!-- Input 2 -->
					<div class="form-group">
						<input class="form-control"  pattern="^[1-9][0-1]{0,1}[а-я]$" name="Class" type="text" placeholder="Класс (11а)" required>
					</div> <!-- /.form-group -->

					<!-- Input 3 -->
					<div class="form-group">
						<input class="form-control"  pattern="^[-a-z0-9!#$%&'*+/=?^_`{|}~]+(?:\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*@(?:[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(?:aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$" name="Email" type="text" placeholder="Email (igor@example.com)" required>
					</div> <!-- /.form-group -->

					<div class="validator">
						<input class="validator" type="text" name="validator" value="">
					</div> 

					<!-- Button -->
					<button class="btn btn-danger btn-block" type="submit">Зарегистрироваться</button>

				</form> <!-- /.sign-in-up-form -->
			</div>
		</div> <!-- /.container -->
	</section>
	<!-- /.services-section -->


    <!-- Features -->
    <section class="features-section magic100" id="section-2">
			
			<div class="container">
			<h1> image Gallery() { </h1>
			<div id="hujallery">
			
			<div id="grid-gallery" class="grid-gallery scroll">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<li>
							<figure><img src="img/thumb/1.jpg" alt="img01"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/2.jpg" alt="img02"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/3.jpg" alt="img03"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/4.jpg" alt="img04"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/5.jpg" alt="img05"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/6.jpg" alt="img06"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/7.jpg" alt="img07"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/8.jpg" alt="img08"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/9.jpg" alt="img09"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/10.jpg" alt="img10"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/11.jpg" alt="img11"/></figure>
						</li>
						<li>
							<figure><img src="img/thumb/12.jpg" alt="img12"/></figure>
						</li>
					</ul>
				</section><!-- // grid-wrap -->
				<section class="slideshow">
					<ul>
						<li>
							<figure><img src="img/large/1.jpg" alt="img01"/></figure>
						</li>
						<li>
							<figure><img src="img/large/2.jpg" alt="img02"/></figure>
						</li>
						<li>
							<figure><img src="img/large/3.jpg" alt="img03"/></figure>
						</li>
						<li>
							<figure><img src="img/large/4.jpg" alt="img04"/></figure>
						</li>
						<li>
							<figure><img src="img/large/5.jpg" alt="img05"/></figure>
						</li>
						<li>
							<figure><img src="img/large/6.jpg" alt="img06"/></figure>
						</li>
						<li>
							<figure><img src="img/large/7.jpg" alt="img07"/></figure>
						</li>
						<li>
							<figure><img src="img/large/8.jpg" alt="img08"/></figure>
						</li>
						<li>
							<figure><img src="img/large/9.jpg" alt="img09"/></figure>
						</li>
						<li>
							<figure><img src="img/large/10.jpg" alt="img10"/></figure>
						</li>
						<li>
							<figure><img src="img/large/11.jpg" alt="img11"/></figure>
						</li>
						<li>
							<figure><img src="img/large/12.jpg" alt="img12"/></figure>
						</li>
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					
				</section><!-- // slideshow -->
			</div><!-- // grid-gallery -->
			</div>
				<h1> } </h1>
		 </div> <!-- /.container -->

    </section>
	<!-- /.features-section -->
	
	<!-- list -->
	<section class="services-section magic100" id="section-4">		
		<div id="cent-out">
			<div id="cent-in">
				<h1>Список участников</h1>
				<div class="table-responsive spisok">
					<table class="table table-hover table-stripe" >
						<thead>
						  <tr>
							<th>Фамилия</th>
							<th>Имя</th>
							<th>Школа</th>
						  </tr>
						</thead>
						<tbody class="scrol">
							<?php
								function GetMyConnection() {
									global $g_link;
									if( $g_link )
										return $g_link;
									$g_link = mysql_connect( 'localhost', 'olimp', 'c2km|h@y$') or die('Could not connect to server.' );
									mysql_select_db('olimp', $g_link) or die('Could not select database.');
									return $g_link;
								}
								$db=GetMyConnection();
								$query = mysql_query("SELECT * FROM users WHERE modered = 1");
								while ($data = mysql_fetch_array($query)) {
									echo '<tr><td> '.$data['lastname']." </td><td> ". $data['firstname']." </td><td>".$data['school'].' </td></tr>';
								}	
							?>
						</tbody>
					</table>
					<br><br>
					<div class="row">
						 <a class="btn btn-danger" href="#section-1">Регистрация</a>
					</div>		
				</div>
				<br><br>	
			</div>
		</div>
	</section>
	<!-- end list -->
	
	
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
	<!-- end Map -->
	
    <!-- Footer -->
    <footer class="footer-section" role="contentinfo">

    <div class="container">

        <div class="row">

        <div class="col-md-6">
            
            <!-- Footer 1 -->
            
            <!-- Social media links -->
            <ul class="social-media-links">
			
              <li><a href="http://vk.com/matfak_vgi"><image src="images/vk.png"/></a></li>
			  
            </ul> <!-- /.social-media-links -->

        </div> <!-- /.col-md-4 -->

		<div  class="col-md-6">
			<p><strong>Обратная связь</strong><br>
			<a href="">ilylomte7@gmail.com</a><br>
			<a href="">joni852963@gmail.com</a></p>
		</div>
		  
		</div> <!-- /.row -->

	</div> <!-- /.container -->

    </footer>
	<!-- /.footer-section -->

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
