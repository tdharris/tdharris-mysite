<!-- JS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Dependencies -->
	<?php if ($_SERVER[REQUEST_URI] == '/?action=q&url=contact') {?>
		<script type="text/javascript" src="public/js/sendMail.js"></script>
	<?php };?>

	<?php if (strpos($_SERVER[REQUEST_URI], '/?action=q&project=') !== false || $_SERVER[REQUEST_URI] == '/?action=q&url=portfolio') {?>
		<script type="text/javascript" src="public/lib/rainbow/rainbow-custom.min.js"></script>
		<script type="text/javascript" src="public/lib/slickjs/slick.min.js"></script>
		<script type="text/javascript" src="public/lib/mixitup/mixitup.min.js"></script>
		<script type="text/javascript" src="public/js/tdharris.js"></script>
	<?php };?>

	<?php if ($_SERVER[REQUEST_URI] == '/?action=q&url=contact' || $_SERVER[REQUEST_URI] == '/?action=a&url=admin') {?>
		<script type="text/javascript" src="public/lib/spin/spin.min.js"></script>
		<script type="text/javascript" src="public/lib/toastr/toastr.min.js"></script>
	<?php };?>

	<?php if ($_SERVER[REQUEST_URI] == '/?action=a&url=admin') {?>
	  <script type="text/javascript" src="public/lib/dropzone/dropzone.js"></script>
	  <script type="text/javascript" src="public/js/admin.js"></script>
	<?php };?>

<script type="text/javascript" src="public/js/login.js"></script>
<script type="text/javascript" src="public/js/getProject.js"></script>