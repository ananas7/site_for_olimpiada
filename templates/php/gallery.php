<?php
	$files = scandir("gallery");
	echo "
			<div id=\"hujallery\">
			<div id=\"grid-gallery\" class=\"grid-gallery scroll\">
			<section class=\"grid-wrap\">
			<ul class=\"grid\">
			<li class=\"grid-sizer\"></li><!-- for Masonry column width -->
		";
	$buf = "";
	for ($i = 0, $ie = count($files); $i < $ie; $i++) {
		if (stripos($files[$i],'.jpg') || stripos($files[$i],'.png') || stripos($files[$i],'.gif')) {
			$buf = $buf . "
					<li>
						<figure><img src=\"gallery/$files[$i]\" alt=\"img $i\"/></figure>
					</li>
				";
		}
	}
	echo $buf;
	echo "	
			</ul>
			</section><!-- // grid-wrap -->
			<section class=\"slideshow\">
			<ul>
		";
	echo $buf;
	echo "
			</ul>
			<nav>
			<span class=\"icon nav-prev\"></span>
			<span class=\"icon nav-next\"></span>
			<span class=\"icon nav-close\"></span>
			</nav>
			</section><!-- // slideshow -->
			</div><!-- // grid-gallery -->
			</div>
		";
	
?>