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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
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
  </head>
  <body class="index" id="to-top">

    <!-- Jumbotron -->
    <header class="jumbotron" role="banner">

      <div class="container">
		<div class="row magic"></div>
		<div class="row magic">
			
			<div class="row">			
				<div><h1>Поздравляем, вы успешно зарегестрированы. Ждем вас на олимпиаде!<h1></div>
			</div>  
			<div class="row">
				<a class="btn btn-danger" href="/">Вернуться на главную</a> 
			</div>
		</div>
		<div class="row magic"></div>
      </div> <!-- /.container -->

    </header> <!-- /.jumbotron -->

	
	<!-- list -->
	<section class="services-section magic100-t" id="section-4">		
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
				</div>
				<br>
					<p>Добавление в таблицу происходит после модерации.</p>
				<br>	
			</div>
		</div>
	</section>
	<!-- end list -->
    
    <!-- Footer -->
    <footer class="footer-section" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div  class="col-md-4">
					<p><strong>Обратная связь</strong><br>
					<a href="">ilylomte7@gmail.com</a><br>
					<a href="">joni852963@gmail.com</a></p>
				</div>
				<div class="col-md-4">
					<a href="http://vk.com/matfak_vgi"><image src="images/vk.png"/></a>
				</div>
				<div class="col-md-2"></div>			  
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
