<div>
    <?php foreach($viewModel as $item) : ?>
    <div class="card" style="width: 700px; margin:20px auto">
        <div class="card-body">
            <h5 class="card-title"><?php echo $item['TITLE']; ?></h5>
			<small><?php echo $item['DATE']; ?></small>
            <p class="card-text"><?php echo $item['BODY']; ?></p>
			<a class="btn btn-default" href="<?php echo $item['LINK']; ?>" target="_blank">Go To Website</a>
        </div>
    </div>

	
	<?php endforeach; ?>
</div>