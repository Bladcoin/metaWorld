<html>
<head>
<title>Image</title>
<script type="text/javascript"><!--
	function resizeWindow() {
		var image = document.getElementById('image');
		window.resizeTo(image.width + 20, image.height + 20);
		wd = image.width + 20 - document.body.clientWidth;
		hd = image.height + 20 - document.body.clientHeight;
		window.resizeTo(image.width + wd + 20, image.height + hd + 20);
	}
//--></script>
</head>
<body marginheight="0" marginwidth="0" topmargin="10" leftmargin="10" rightmargin="10" bottommargin="10" onload="resizeWindow()"><div align="center">
<?php
	echo '<img src="'.htmlspecialchars($_GET['url'], ENT_QUOTES).'" border="0" id="image" />';
?>
</div></body>
</html>