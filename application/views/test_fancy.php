
<!DOCTYPE html>
<html>
<head>
	<title>fancyBox - Fancy jQuery Lightbox Alternative | Demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Add jQuery library -->
	<script type="text/javascript" src="assets/specific/source_fancy/jquery-1.8.2.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="assets/specific/source_fancy/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="assets/specific/source_fancy/jquery.fancybox.css?v=2.1.2" media="screen" />

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="assets/specific/source_fancy/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
</head>
<body>
	<ul>
		<li><a class="fancybox fancybox.iframe" href="inter/create_user">Iframe</a></li>
	</ul>

</body>
</html>