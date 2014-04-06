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

		<div class="container" style="top: 80px; padding: 80px 0;">
			<div class="row">
				<div class="span9" style="min-height: 300px;">
					<h2>
						<span style="text-shadow: 0 0 3px;">
							<span style="font-family: 'Trajan Pro Bold';"><?= $chapter['designation']; ?></span>
							<span style="font-family: 'Aristarcoj';"><?= '('.$chapter['initials'].')'; ?></span>
						</span>
						<small><?= $chapter['school']; ?></small>
					</h2>
					<div id="map-canvas" style="width: 100%; height: 350px; box-shadow: 0 0 10px; border-radius: 5px; margin-bottom: 18px"></div>
					<table class="table table-striped">
						<tbody>
							<tr>
								<th>Chapter Code</th>
								<td><?= $chapter['chapter_code']; ?></td>
							</tr>
							<tr>
								<th>Chapter Designation</th>
								<td><?= $chapter['designation']; ?></td>
							</tr>
							<tr>
								<th>School</th>
								<td><?= $chapter['school']; ?></td>
							</tr>
							<tr>
								<th>Address</th>
								<td><?= $chapter['complete_address']; ?></td>
							</tr>
							<tr>
								<th>Fraternity recognized on</th>
								<td><?= $chapter['frat_recog_date']; ?></td>
							</tr>
							<tr>
								<th>Sorority recognized on</th>
								<td><?= $chapter['soro_recog_date']; ?></td>
							</tr>
							<tr>
								<th>Mother Chapter</th>
								<td><?= anchor('chapters/show/'.$chapter['mother_chapcode'], $chapter['mother_chapter']); ?></td>
							</tr>
						</tbody>
					</table>
					<fieldset>
						<legend><h3>History</h3></legend>
						<p><?= $chapter['history']; ?></p>
					</fieldset>
				</div>
				<div class="span3" style="margin-top: 53px">
					<ul class="nav nav-list affix" style="margin-top: 30px; padding; 0; -webkit-border-radius: 6px; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);">
						<li>
							<a href="#">
								<i class="icon-chevron-left"></i>
								Your Lords & Ladies
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-chevron-left"></i>
								Your Batchmates
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-chevron-left"></i>
								Your Profile
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-chevron-left"></i>
								Integrated Chapters
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-chevron-left"></i>
								Things You Must Know
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<?php include('fronts/footer.php'); ?>

		<?php include('fronts/signIn.php'); ?>
		
		<?php include('fronts/scripts.php'); ?>
	</body>

	<script type="text/javascript">
		function initialize() {
		var myLatlng = new google.maps.LatLng(<?= $chapter['latitude']; ?>, <?= $chapter['longitude']; ?>);
		var mapOptions = { center: myLatlng, zoom: 18 };
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: '<?= $chapter['designation']." @ ".$chapter['school']; ?>'
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</html>
