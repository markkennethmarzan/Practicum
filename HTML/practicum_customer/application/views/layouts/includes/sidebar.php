<div class="cart-block">
    <div class="col-md-6">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
      <?php if(!$this->session->userdata('logged_in')) : ?>
        <li><a href="<?php echo base_url(); ?>users/register">Create Account</a></li>
      <?php endif; ?>
      </ul>
      <?php if(!$this->session->userdata('logged_in')) : ?>
       <form method="post" action="<?php echo base_url(); ?>users/login" class="navbar-form navbar-right">
        <div class="form-group">
          <input name="username" type="text" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <input name="password" type="password" class="form-control" placeholder="Enter Password">
        </div>
        <button name="submit" type="submit" class="btn btn-default">Login</button>
      </form>
    <?php else : ?>
    <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/logout">
      <button name="submit" type="submit" class="btn btn-default">Logout</button>
    </form>
    <?php endif; ?>
        </div><!---navbar----->
        <form action="cart/update" method="post">
          <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
            <tr>
              <th>QTY</th>
              <th>Item Description</th>
              <th style="text-align:right">Item Price</th>
            </tr>
            <?php $i = 1; ?>
    <?php foreach ($this->cart->contents() as $items): ?>
      <input type="hidden" name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid']; ?>" />
        <tr>
            <td><input type="text" name="<?php echo $i.'[qty]'; ?>" value="<?php echo $items['qty']; ?>" maxlength="3" size="5" class="qty" /></td>
            <td><?php echo $items['name']; ?></td>
            <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
        </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    <tr>
        <td></td>
        <td class="right"><strong>Total</strong></td>
        <td class="right" style="text-align:right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
    </tr>
          </table>
        <br>
        <p><button class="btn btn-default" type="submit">Update Cart</button> 
        <a class="btn btn-default" href="cart">Go To Cart</a></p>
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