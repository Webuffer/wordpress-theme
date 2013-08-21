		<hr>

		<footer class="footer">
			<p>&copy; Company 2013</p>
		</footer>
	</div><!-- /container -->

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_footer(); ?>

	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>

	<!-- Optional, bootstrap javascript library -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>

	<!-- [if Ite IE 6]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap-ie.js"></script>
	<! [endif]-->

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if It IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
</body>
</html>