<?php

function metadata($opt)
{
?>

	<title><?php echo $opt['titulo']; ?></title>
	<meta charset='utf-8' />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width"/>

	<meta property='og:description' content='<?php echo $opt['titulo']; ?>' />
	<meta property='og:image' content='<?php echo $opt['fb_preview']; ?>' />
	<meta property='og:image:type' content='image/png' />
	<meta property='og:image:width' content='1200' />
	<meta property='og:image:height' content='630' />
	<link rel='icon' type='image/png' href='<?php echo $opt['icon_path']; ?>'>
	<link rel="shortcut icon" type='image/png' href='<?php echo $opt['icon_path']; ?>'>
	<!-- Safari APP -->
	<link rel='apple-touch-icon-precomposed' href='<?php echo $opt['icon_path']; ?>' />
	<link rel='apple-touch-icon' href='<?php echo $opt['icon_path']; ?>' />
	<!-- W8 -->
	<meta name='msapplication-TileColor' content='#669900' />
	<meta name='msapplication-TileImage' content='<?php echo $opt['icon_path']; ?>' />
	<link rel="stylesheet" href="css/main.css">

<?php
}

function cover()
{
?>
	<aside class="cover">
		<div>
			<span></span>
		</div>
	</aside>
<?php
}
?>