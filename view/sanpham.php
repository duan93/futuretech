<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/shop-no-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:43:09 GMT -->

<?php
  include '../view/lock/header.php';
  include '../view/lock/menus.php';
 ?>


<div class="darker-stripe">
<div class="container">
<div class="row">
<div class="span12">
<ul class="breadcrumb">
<li>
<a href="index-2.html">Webmarket</a>
</li>
<li><span class="icon-chevron-right"></span></li>
<li>
<a href="shop.html">Shop</a>
</li>
<li><span class="icon-chevron-right"></span></li>
<li>
<a href="shop-no-sidebar.html">All Products (no sidebar)</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="container">
<div class="push-up blocks-spacer">
<div class="row">
<section class="span12">



<div class="underlined push-down-20">
<div class="row">
<div class="span6">
<h3><span class="light">All</span> Products</h3>
</div>
<div class="span6">
<div class="form-inline sorting-by">
<label for="isotopeSorting" class="black-clr">Sort:</label>
<select id="isotopeSorting" class="span3">
<option value='{"sortBy":"price", "sortAscending":"true"}'>By Price (Low to High) &uarr;</option>
<option value='{"sortBy":"price", "sortAscending":"false"}'>By Price (High to Low) &darr;</option>
<option value='{"sortBy":"name", "sortAscending":"true"}'>By Name (Low to High) &uarr;</option>
<option value='{"sortBy":"name", "sortAscending":"false"}'>By Name (High to Low) &darr;</option>
<option value='{"sortBy":"popularity", "sortAscending":"true"}'>By Popularity (Low to High) &uarr;</option>
<option value='{"sortBy":"popularity", "sortAscending":"false"}'>By Popularity (High to Low) &darr;</option>
</select>
<label for="numberShown" class="black-clr">Show:</label>
<select id="numberShown" class="span1">
<option value="9">9</option>
<option value="15">15</option>
<option value="30">30</option>
</select>
</div>
</div>
</div>
</div>



<div class="row popup-products">
<div id="isotopeContainer" class="isotope-container">

<?php
$dssp = new product();
$result = $dssp->getList();

while ($set = $result -> fetch()): ?>

<div class="span3 isotope--target filter--accessories" data-price="75" data-popularity="2" data-size="xs|l|xl|xxl" data-color="orange" data-brand="nike">
<div class="product">
<div class="product-inner">

<div class="product-img">
<div class="picture">
<a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/<?php echo $set['ProductImage']; ?>"/></a>
<div class="img-overlay">
<a class="btn more btn-primary" href="?action=sanpham_chitiet&ProductID=<?php echo $set['ProductID']; ?>">More</a>
<a class="btn buy btn-danger" href="#">Add to Cart</a>
</div>
</div>
</div>
<div class="main-titles no-margin">
<h4 class="title"><?php echo $set['ProductPrice']; ?>đ</h4>
<h5 class="no-margin isotope--title"><?php echo $set['ProductBrand']; ?> <?php echo $set['ProductName']; ?></h5>
</div>
<div class="row-fluid hidden-line">
<div class="span6">
<a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
<a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
</div>
<div class="span6 align-right">
<span class="icon-star stars-clr"></span>
<span class="icon-star stars-clr"></span>
<span class="icon-star"></span>
<span class="icon-star"></span>
<span class="icon-star"></span>
</div>
</div>
</div>
</div>
</div>
<?php endwhile; ?>



</div>
</div>
<hr/>



<div class="pagination pagination-centered">
<ul>
<li><a href="#" class="btn btn-primary"><span class="icon-chevron-left"></span></a></li>
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#" class="btn btn-primary"><span class="icon-chevron-right"></span></a></li>
</ul>
</div>
</section>
</div>
</div>
</div>



<?php
include '../view/lock/footer.php';
?>
</body>

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/shop-no-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:43:09 GMT -->
</html>
