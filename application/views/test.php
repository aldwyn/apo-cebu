<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/typeahead.bundle.js"></script>
		<title>Test for typeahead.js</title>
		<style type="text/css">
			.tt-dropdown-menu {
		        background-color: #fff;
		        border: 1px solid #000;
		      }

		      .tt-suggestion.tt-cursor {
		        background-color: #ccc;
		      }
		</style>
	</head>

	<body>
		<div class="typeahead-wrapper">
    	    <input class="states" type="text" placeholder="states" value="Michigan" onkeyup="changeValues(document.getElementsByClassName('states')[0].value)">
      	</div>
      	<script type="text/javascript" src="js/doc.js"></script>
	</body>
</html>