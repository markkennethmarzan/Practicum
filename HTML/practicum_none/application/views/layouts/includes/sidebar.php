      <div class="cart-block">
        <form action="cart/update" method="post">
          <table cellpadding="6" cellspacing="1" style="width: 100%" border="0">
            <tr>
              <th>QTY</th>
              <th>Item Description</th>
              <th style="text-align: right">Item Price</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($this->cart->contents() as $items) : ?>
              asd
                <input type="hidden" name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid']; ?>" />
                <tr>
                    <td><input type="text" name = "<?php echo $i.'[qty]'; ?>" value="<?php echo $items['qty']; ?>" maxlength="3" size="" /></td>
                    <td><?php echo $items['name']; ?></td>
                    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>

                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

            <tr>
                <td></td>
                <td class= "right"><strong>TOTAL</strong></td>
                <td class="right" style="text-align:right"> $<?php echo $this->cart->format_number($this->cart->total()); ?></td>
            </tr>
            <br>


            <p>
              <button class="btn btn-default" type="submit">Update Cart</button>
            </p>
            <a class="btn btn-default" href="cart.html">Go to cart</a>
          </table>
        </form>
      </div>
      <div class="panel panel-default panel-list">
        <div class="panel-heading panel-heading-dark">
          <h3 class="panel-title">Categories</h3>
        </div>
        <ul class="list-group">
          <?php foreach(get_categories_help() as $category) : ?>
              <li class="list-group-item"><a href="<?php echo base_url(); ?>products/category/<?php echo $category->category_id; ?>"><?php echo $category->name; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!--List Group-->
            <div class="panel panel-default panel-list">
        <div class="panel-heading panel-heading-dark">
          <h3 class="panel-title">Most popular</h3>
        </div>
        <ul class="list-group">
          <?php foreach(get_popular_help() as $popular) : ?>
              <li class="list-group-item"><a href="<?php echo base_url(); ?>products/details/<?php echo $popular->product_id; ?>"><?php echo $popular->title; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>