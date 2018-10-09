<div class="text-center">
	<h1>Welcome To News</h1>
	<p class="lead">Find something cool? Share it with our community. Look at what others have shared as well</p>
	<?php  if(isset($_SESSION['is_logged_in'])) : ?>	
		<a class="btn btn-primary text-center" href="<?php echo ROOT_PATH;?>posts/add">Share Now</a>
	<?php endif; ?>
</div>