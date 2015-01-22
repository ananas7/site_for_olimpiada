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
  
		<link rel="shortcut icon" href="../favicon.ico">
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
				<div><h1>Поздравляем, вы успешно зарегестрированы! Ждем вас на олимпиаде!<h1></div>
			</div><!-- row -->   
			<div class="row">
				<a class="btn btn-danger" href="/">Еще регистрируемся?)</a> 
			</div> <!-- row -->
		</div>
		<div class="row magic"></div>
      </div> <!-- /.container -->

    </header> <!-- /.jumbotron -->

	
	  <section class="features-section" id="section-4">
		<h1 align="center">Список участников</h1>
		<div class="table-responsive spisok" >
		<table class="table table-hover" >
			<thead>
			  <tr>
				<th>Фамилия</th>
				<th>Имя</th>
				<th>Класс</th>
			  </tr>
			</thead>
			<tbody>
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
	</section>
    <!-- Footer -->
    <footer class="footer-section" role="contentinfo">

      <div class="container">

        <div class="row">

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p>Сделано НЕ в Китае.</p>
            </section>

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer col-padding">
            
            <!-- Footer 1 -->
            <section class="text-center">
              <p>Мы в контакте.</p>
            </section>

            <!-- Social media links -->
            <ul class="social-media-links">
			
              <li><a class="fa fa-vk fb" href="https://vk.com/matfak_vgi"></a></li>
              
            </ul> <!-- /.social-media-links -->

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p><strong>Создано при поддержки</strong> <br>Студентов сия альма-матер, <br>И просто хороших людей)</p>
            </section>

          </div> <!-- /.col-md-4 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </footer> <!-- /.footer-section -->

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
