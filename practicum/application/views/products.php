<?php foreach($products as $product) : ?>
	<div class="col-md-4">
		<div class="game-price"><?php echo $product->price; ?></div>
		<a href="<?php echo base_url(); ?>products/details/<?php echo $product->product_id;?> ">
			<img src="<?php echo base_url(); ?> assets/pictures/products<?php echo $product->image; ?>" alt="">
		</a>
		<div class="game-title">
			<?php echo $product->title; ?>
		</div>
		<div class="game-add">
			<button class="btn btn-primary" type="submit">Add to Cart</button>
		</div>
	</div>
<?php endforeach; ?>