<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../public/css/style.css">
	<meta charset="UTF-8">
	<title>drinkMe</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>

		$(document).ready(function () {
			$('.link').click(function () {
			    //Conditional states allow the dropdown box appear and disappear 
			    if ($('.dropdown').is(":visible")) {
			        $('.dropdown').hide()
			        $('#session').removeClass('active'); // When the dropdown is not visible removes the class "active"
			    }else{
			    	$('.dropdown').show()
			    	$('#session').addClass('active'); // When the dropdown is visible add class "active"
			    }
			    return false;
			});
			
			// Allow to hide the dropdown box if you click anywhere on the document.
			$('.dropdown').click(function(e) {e.stopPropagation();});
			$(document).click(function() {
			    $('.dropdown').hide();
				$('#session').removeClass('active');
			});
		});  

	</script>
</head>
<body>
	<header class="clearfix">
		<img id="logo" src="../public/images/logo/logo.fw.png" alt="">

		<nav>
			<ul>
				<li><a href="#">About us</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Our Partners</a></li>
			</ul>
		</nav>
	</header>