<div class="navbar navbar-static-top" id="stickyNavbar">
<div class="navbar-inner">
<div class="container">
<div class="row">
<div class="span9">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>



<div class="nav-collapse collapse">
<ul class="nav" id="mainNavigation">
<li class="active">
<a href="usercontroller.php?action=home">HOME</a>
</li>

<?php
$getmenu = new product();
$result = $getmenu->getProductType();
?>
<?php while ($set = $result -> fetch()): ?>
<li class="dropdown">
<a href="usercontroller.php?action=product-list" class="dropdown-toggle"><?php echo $set['TypeName']?><b class="caret"></b> </a>
<?php endwhile; ?>

<?php  ?>
<ul class="dropdown-menu">
<li><a href="shop.html">Apple</a></li>
<li><a href="shop.html">Sony</a></li>
<li><a href="shop.html">Samsung</a></li>
<li><a href="shop.html">Blackberry</a></li>
</ul>
</li>




<form class="navbar-form pull-right" action="#" method="get">
<button type="submit"><span class="icon-search"></span></button>
<input type="text" class="span1" name="search" id="navSearchInput">
</form>
</div>
</div>



<div class="span3">
<div class="cart-container" id="cartContainer">
<div class="cart">
<p class="items">CART <span class="dark-clr">(3)</span></p>
<p class="dark-clr hidden-tablet">$1816.90</p>
<a href="checkout-step-1.html" class="btn btn-danger">

<i class="icon-shopping-cart"></i>
</a>
</div>
<div class="open-panel">
<div class="item-in-cart clearfix">
<div class="image">
<img src="images/dummy/cart-items/cart-item-1.jpg" width="124" height="124" alt="cart item"/>
</div>
<div class="desc">
<strong><a href="product.html">Adipiscing Vel Vel Felis</a></strong>
<span class="light-clr qty">
Qty: 1
&nbsp;
<a href="#" class="icon-remove-sign" title="Remove Item"></a>
</span>
</div>
<div class="price">
<strong>$5914</strong>
</div>
</div>
<div class="item-in-cart clearfix">
<div class="image">
<img src="images/dummy/cart-items/cart-item-2.jpg" width="124" height="124" alt="cart item"/>
</div>
<div class="desc">
<strong><a href="product.html">Adipiscing Sed Ac Felis Ut</a></strong>
<span class="light-clr qty">
Qty: 1
&nbsp;
<a href="#" class="icon-remove-sign" title="Remove Item"></a>
</span>
</div>
<div class="price">
<strong>$4644</strong>
</div>
</div>
<div class="item-in-cart clearfix">
<div class="image">
<img src="images/dummy/cart-items/cart-item-3.jpg" width="124" height="124" alt="cart item"/>
</div>
<div class="desc">
<strong><a href="product.html">Amet Sed Nisi</a></strong>
<span class="light-clr qty">
Qty: 1
&nbsp;
<a href="#" class="icon-remove-sign" title="Remove Item"></a>
</span>
</div>
<div class="price">
<strong>$5059</strong>
</div>
</div>
<div class="summary">
<div class="line">
<div class="row-fluid">
<div class="span6">Shipping:</div>
<div class="span6 align-right">$4.99</div>
</div>
</div>
<div class="line">
<div class="row-fluid">
<div class="span6">Subtotal:</div>
<div class="span6 align-right size-16">$357.81</div>
</div>
</div>
</div>
<div class="proceed">
<a href="checkout-step-1.html" class="btn btn-danger pull-right bold higher">CHECKOUT <i class="icon-shopping-cart"></i></a>
<small>Shipping costs are calculated based on location. <a href="#">More information</a></small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
