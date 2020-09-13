<?php
	include('modules/fnLoader.php');

	$configSite = array(
		"titulo" => "Cerveza Presidente",
		"tags" => ", institucional",
		"icon_path" => "http://miguelrivas.me/img/logo.png",
		"fb_preview" => "https://miguelrivas.me/img/pv_institucional_2015.png"
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<?php metadata($configSite); ?>
		<script type="text/javascript">
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-89989670-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<?php cover(); ?>
	</body>
</html>