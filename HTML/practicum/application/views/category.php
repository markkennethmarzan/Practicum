<?php foreach($products as $product) : ?>
 <div class="col-md-4 thumbnail">
  <div class="caption"><?php echo $product->price; ?></div>
   <a href="<?php echo base_url(); ?>products/details/<?php echo $product->product_id; ?>">
    <img class="center" src="<?php echo base_url(); ?>assets/images/<?php echo $product->image; ?>" />
   </a>
   <div class="game-title">
    <?php echo $product->title; ?>
   </div>
   <div class="game-add">
    <form method="post" action="<?php echo base_url(); ?>cart/add">
       QTY:<input class="qty" type="text" name="qty" value="1" /><br>
       <input type="hidden" name="item_number" value="<?php echo $product->product_id; ?>" />
       <input type="hidden" name="price" value="<?php echo $product->price; ?>" />
       <input type="hidden" name="title" value="<?php echo $product->title; ?>" />
       <button class="btn btn-primary" type="submit">Add To Cart</button>
      </form>
   </div>
 </div>

<?php endforeach; ?>﻿