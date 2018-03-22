      <div class="cart-block">
        <form action="cart/update" method="post">
          <table cellpadding="6" cellspacing="1" style="width: 100%" border="0">
            <tr>
              <th>QTY</th>
              <th>Item Description</th>
              <th style="text-align: right">Item Price</th>
            </tr>
            <tr>
              <td></td>
              <td class="right"><strong>Total</strong></td>
              <td class="right" style="text-align: right">P</td>
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