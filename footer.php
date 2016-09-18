<?php wp_footer(); ?>
<!-- Footer -->
					<footer id="footer">
						<section>
						<?php dynamic_sidebar('footer_1'); ?>	
						</section>
						<section>
							<?php dynamic_sidebar('footer_2'); ?>	
						</section>
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="<?php echo(bloginfo(template_directory).'/js/jquery.min.js'); ?>"></script>
			<script src="<?php echo(bloginfo(template_directory).'/js/jquery.scrollex.min.js'); ?>"></script>
			<script src="<?php echo(bloginfo(template_directory).'/js/jquery.scrolly.min.js'); ?>"></script>
			<script src="<?php echo(bloginfo(template_directory).'/js/skel.min.js'); ?>"></script>
			<script src="<?php echo(bloginfo(template_directory).'/js/util.js'); ?>"></script>
			<script src="<?php echo(bloginfo(template_directory).'/js/main.js'); ?>"></script>

  </body>
</html>