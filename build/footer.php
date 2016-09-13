	<footer id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">

				</div>
			</div>
		</div>
	</footer>
	<script src="inc/js/script.min.js"></script>
	<?php if(getenv('DEV_IP')) : ?>
		<script src="//<?= getenv('DEV_IP') ?>:35729/livereload.js"></script>
	<?php endif; ?>
	GA
</body>
</html>
