             <div class="row details">
              <div class="col-md-6 w-50 m-auto">
                 <img src="<?php echo base_url(); ?>assets/images/<?php echo $product->image ?>"/>
             </div>
             <div class="col-md-10 ml-5 pl-5 text-center">
               <h3><?php echo $product->title; ?></h3>
               <div class="details-prirce">
                <?php echo $product->price; ?>
              </div>
              <div class="details-description">
                <p> <?php echo $product->description; ?></p>
              </div>
              <div class="details-buy">
                <form method="post" action="<?php echo base_url(); ?>cart/add">
                  QTY: <input class="qty" type="text" name="qty" value="1"/>
                  <input type="hidden" name="item_number" value="<?php echo $product->product_id; ?>" />
                  <input type="hidden" name="price" value="<?php echo $product->price; ?>" />
                  <input type="hidden" name="title" value="<?php echo $product->title; ?>" />
                  <button class="btn btn-primary" type="submit"> Add to Cart </button>
                </form>
              </div>
            </div>
          </div>