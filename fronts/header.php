<div class="navbar navbar-fixed-top navbar-inverse" style="box-shadow: 0 0 10px; clear: both">
	<div class="navbar-inner" style="background-image: linear-gradient(to bottom, #000f8d, #000D42);">
		<div class="container">
			<a class="brand" href="<?= base_url(); ?>">
				<img src="<?= base_url(); ?>/img/apo-logo-greek-1inch.png" style="height: 40px; display: inline-block; float: left">
				<div style="display: inline-block; margin-left: 10px">
					<span style="font-family: 'Trajan Pro Bold'">Alpha Phi Omega</span><br/>
					<span>Cebu Chapters</span>
				</div>
			</a>
			<ul class="nav nav-collapse collapse pull-right" style="padding: 10px 0">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						About Us
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						<li><a tabindex="-1" href="#">Our Chapters</a></li>
						<li><a tabindex="-1" href="#">Our Stories</a></li>
						<li><a tabindex="-1" href="#">Our Traditions</a></li>
						<li><a tabindex="-1" href="#">Our Organization</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Join
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						<li><a tabindex="-1" href="#">Why & How</a></li>
						<li><a tabindex="-1" href="#">Testimonials</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Leadership Development
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						<li><a tabindex="-1" href="#">Featured Projects</a></li>
						<li><a tabindex="-1" href="#">Projects Archive</a></li>
						<li><a tabindex="-1" href="#">National Conventions</a></li>
						<li><a tabindex="-1" href="#">Oblation Run</a></li>
					</ul>
				</li>
				<li>
					<a href="#signIn" role="button" data-toggle="modal" style="padding: 0">
						<span class="btn btn-primary">
							<i class="icon-user"></i>
							<span>Member's Page</span>
						</span>
					</a>
				</li>
				<li style="margin-left: 10px">
					<a href="#search" role="button" data-toggle="modal" style="padding: 0">
						<span class="btn btn-warning">
							<i class="icon-search"></i>
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div id="search" class="modal hide fade" tabindex="-1" role="dialog" aria-labeledby="signInLabel" aria-hidden="true">
	<div class="modal-body">
		<form class="form-horizontal" style="margin: 0">
			<fieldset style="text-align: center">
				<label>
					<h3>Search anything about APO!</h3>
				</label>
				<input type="text" placeholder="Type something" style="width: 97%; margin-bottom: 10px">
				<div class="alert" style="margin-bottom: 0">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Warning</strong>
					<span>This search engine serves as a chapter locator, queries on every chapter roster, etc.</span>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		<button type="submit" class="btn btn-warning">Submit</button>
	</div>
</div>