<!DOCTYPE html>
<html>
	<head>
  		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Schoolninja</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="fullscreen_bg" class="fullscreen_bg">
		<?php
		$view_name = (isset($data['route_redirect'])?$data['route_redirect']:$view_name);
		require_once 'views/navigation_view.php';
		$helper->loadView(lcfirst($view_name), $data);
		
		if(DEBUG == true){
			echo '<div class="container well container" style="margin-top:20px;">';
				echo '<h5><b>$_REQUEST DATADUMP</b></h5><pre>';
				var_dump($_REQUEST);
		  	echo '</pre></div>';
			echo '<div class="container well container">';
				echo '<h5><b>$_SESSION DATADUMP</b></h5><pre>';
		  		var_dump($_SESSION);
		  	echo '</pre></div>';
		  	echo '<div class="container well container">';
		  		echo '<h5><b>$data DATADUMP</b></h5><pre>';
		  		var_dump($data);
		  	echo '</pre></div>';
		}
		?>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>