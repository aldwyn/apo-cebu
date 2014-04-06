<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('fronts/meta.php'); ?>
		<title>Alpha Phi Omega - Cebu Chapters</title>
		<style type="text/css">
			* {
				-webkit-transition: all .2s linear;
				font-family: 'Open Sans';
			}
		</style>
	</head>

	<body>
		<?php include('fronts/header.php'); ?>

		<div id="home-carousel" class="carousel slide" style="position: relative; margin-top: 60px; background-color: rgba(0, 0, 0, 0.75); background-image: url('img/apo-logo-greek-transparent.png'); background-repeat: no-repeat; background-size: cover; background-position: center">
			<ol class="carousel-indicators">
				<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home-carousel" data-slide-to="1" class=""></li>
				<li data-target="#home-carousel" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active" style="background-image: url('img/1374783_10151885110307295_770369978_n.jpg'); height: 600px; background-size: cover; background-position: center">
					<div class="carousel-caption">
						<div class="container">
							<h2>
								<span style="color: #fff; font-family: 'Aristarcoj'">[A] Alpha</span> | 
								<small style="font-family: 'Trajan Pro Bold'">BE A LEADER.</small>
							</h2>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>
				<div class="item" style="background-image: url('img/995214_10151938587172295_390632753_n.jpg'); height: 600px; background-size: cover; background-position: center">
					<div class="carousel-caption">
						<div class="container">
							<h2>
								<span style="color: #fff; font-family: 'Aristarcoj'">[F] Phi</span> | 
								<small style="font-family: 'Trajan Pro Bold'">BE A FRIEND.</small>
							</h2>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>
				<div class="item" style="background-image: url('img/1378420_10151885109777295_1683545406_n.jpg'); height: 600px; background-size: cover; background-position: center">
					<div class="carousel-caption">
						<div class="container">
							<h2>
								<span style="color: #fff; font-family: 'Aristarcoj'">[W] Omega</span> | 
								<small style="font-family: 'Trajan Pro Bold'">BE OF SERVICE.</small>
							</h2>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>
			</div>
            <a class="left carousel-control" href="#home-carousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#home-carousel" data-slide="next">›</a>
		</div>

		<div style="background: -webkit-radial-gradient(#f3bd27, #fff);background: -moz-radial-gradient(#f3bd27, #fff); margin-bottom: 40px; padding-top: 30px; padding-bottom: 10px; text-align: center; margin-top: -20px">
			<div class="container">
				<div style="width: 6.5in; margin: 0 auto">
					<div style="background-image: url('img/torch.png'); width: 2.25in; height: 3in; display: inline-block; background-size: contain; backgroun-position: center; background-repeat: no-repeat"></div>
					<!-- <div style="background-image: url('img/apo-iconic-2.png'); width: 3in; height: 3in; display: inline-block;"></div> -->
				</div>
				<div style="font-family: 'Trajan Pro Bold'">
					<h1>Alpha Phi Omega</h2>
					<h4>National Service Fraternity & Sorority - Cebu Chapters</h4>
					<h3>Be a Leader. Be a Friend. Be of Service.</h3>
				</div>
				<div class="navbar navbar-inverse" style="text-align: center">
					<div class="navbar-inner">
						<div class="brand">APO-Cebu</div>
						<ul id="chapters" class="nav pull-right">
						<?php foreach ($chapters as $chapter) : ?>
							<li>
								<?= anchor('chapters/show/'.$chapter['chapter_code'], $chapter['initials'], 'title = "'.$chapter['designation'].' Chapter"'); ?>
							</li>
						<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row-fluid">
				<ul class="thumbnails">
					<li class="span6">
						<div class="thumbnail" style="text-align: center">
							<iframe style="width: 100%; height: 315px" src="//www.youtube.com/embed/4b-N8dcJ1nk" frameborder="0" allowfullscreen></iframe>
							<p><strong>Testimonial:</strong> Hear it from our members!</p>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" style="text-align: center">
							<div style="height: 200px; width: 100%; background-size: cover; background-position: left; background-image: url('img/torch.png');"></div>
							<!-- <img src="img/torch.png" alt="" style="height: 200px; width: 300px"> -->
							<h3>APO Torch</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" style="text-align: center">
							<div style="height: 200px; width: 100%; background-size: cover; background-position: left; background-image: url('img/1394373_10151938590072295_2044406534_n.jpg');"></div>
							<!-- <img src="img/1394373_10151938590072295_2044406534_n.jpg" alt="" style="height: 200px; width: 300px;  background-position: left;"> -->
							<h3>APO Services</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</li>
				</ul>
				<div id="map-canvas" style="width: 100%; height: 350px; box-shadow: 0 0 10px; border-radius: 5px; margin-bottom: 18px"></div>
			</div>
		</div>

		<style type="text/css">
			#chapters li a {
				font-family: 'Aristarcoj';
				font-size: 25px;
			}

			#chapters li a:hover {
				background-color: #bfbfbf;
				border-radius: 4px;
			}
		</style>
		
		<?php include('fronts/footer.php'); ?>
		<?php include('fronts/signIn.php'); ?>
		<?php include('fronts/scripts.php'); ?>
		<script>
			function initialize() {
				var myLatlng = new google.maps.LatLng(<?= $chapter['latitude']; ?>, <?= $chapter['longitude']; ?>);
				var mapOptions = { center: myLatlng, zoom: 12 };
				var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
				var marker = new google.maps.Marker({
				      position: myLatlng,
				      map: map,
				      title: ''
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</body>
</html>
