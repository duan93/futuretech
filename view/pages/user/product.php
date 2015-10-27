<?php
$dssp = new product();
$result = $dssp->getList();
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


<?php while ($set = $result -> fetch()): ?>

<div class="span3 isotope--target filter--accessories" data-price="75" data-popularity="2" data-size="xs|l|xl|xxl" data-color="orange" data-brand="nike">
<div class="product">
<div class="product-inner">
<div class="stamp red">Sold</div>
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



<footer>



<div class="foot-light">
<div class="container">
<div class="row">
<div class="span4">
<h2 class="pacifico">Webmarket &nbsp; <img src="images/webmarket.png" alt="Webmarket Cart" class="align-baseline"/></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt vestibulum risus et gravida. Etiam vel augue ligula, blandit malesuada nisi. Quisque a augue nisi. Nullam interdum convallis </p>
</div>
<div class="span4">
<div class="main-titles lined">
<h3 class="title">Facebook</h3>
</div>
<div class="bordered">
<div class="fill-iframe">
<div class="fb-like-box" data-href="https://www.facebook.com/ProteusNet" data-width="292" data-height="200" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</div>
</div>
</div>
<div class="span4">
<div class="main-titles lined">
<h3 class="title"><span class="light">Newsletters</span> Signup</h3>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam tincidunt vestibulum risus et gravida.</p>

<div id="mc_embed_signup">
<form action="http://proteusthemes.us4.list-manage1.com/subscribe/post?u=ea0786485977f5ec8c9283d5c&amp;id=5dad3f35e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="_blank" novalidate>
<div class="mc-field-group">
<input type="email" value="" placeholder="Enter your e-mail address" name="EMAIL" class="required email" id="mce-EMAIL">
<input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>
</form>
</div>

</div>
</div>
</div>
</div>



<div class="foot-dark">
<div class="container">
<div class="row">



<div class="span3">
<div class="main-titles lined">
<h3 class="title"><span class="light">Main</span> Navigation</h3>
</div>
<ul class="nav bold">
<li><a href="#">Home</a></li>
<li><a href="#">Pages</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Shortcodes</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>



<div class="span3">
<div class="main-titles lined">
<h3 class="title"><span class="light">Second</span> Navigation</h3>
</div>
<ul class="nav">
<li><a href="#">Lorem Ipsum Dolor Sit</a></li>
<li><a href="#">Amet Webmarket Signup</a></li>
<li><a href="#">Brands</a></li>
<li><a href="#">Latest Tweets Sometging</a></li>
<li><a href="#">Ipsum Sit Lorem Amet</a></li>
</ul>
</div>



<div class="span3">
<div class="main-titles lined">
<h3 class="title"><span class="light">Third</span> Navigation</h3>
</div>
<ul class="nav">
<li><a href="#">Lorem Ipsum Dolor Sit</a></li>
<li><a href="#">Amet Webmarket Signup</a></li>
<li><a href="#">Brands</a></li>
<li><a href="#">Latest Tweets Sometging</a></li>
<li><a href="#">Ipsum Sit Lorem Amet</a></li>
</ul>
</div>



<div class="span3">
<div class="main-titles lined">
<h3 class="title"><span class="light">Fourth</span> Navigation</h3>
</div>
<ul class="nav">
<li><a href="#">Lorem Ipsum Dolor Sit</a></li>
<li><a href="#">Amet Webmarket Signup</a></li>
<li><a href="#">Brands</a></li>
<li><a href="#">Latest Tweets Sometging</a></li>
<li><a href="#">Ipsum Sit Lorem Amet</a></li>
</ul>
</div>
</div>
</div>
</div>



<div class="foot-last">
<a href="#" id="toTheTop">
<span class="icon-chevron-up"></span>
</a>
<div class="container">
<div class="row">
<div class="span6">
&copy; Copyright 2013. Images of products by <a target="_blank" href="http://www.horsefeathers.eu/">Horsefeathers</a>.
</div>
<div class="span6">
<div class="pull-right">Webmarket HTML Template by <a href="http://www.proteusthemes.com/">ProteusThemes</a></div>
</div>
</div>
</div>
</div>
</footer>




<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="loginModalLabel"><span class="light">Login</span> To Webmarket</h3>
</div>
<div class="modal-body">
<form method="post" action="#">
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputEmail">Username</label>
<div class="controls">
<input type="text" class="input-block-level" id="inputEmail" placeholder="Username" required>
</div>
</div>
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputPassword">Password</label>
<div class="controls">
<input type="password" class="input-block-level" id="inputPassword" placeholder="Password" required>
</div>
</div>
<div class="control-group">
<div class="controls">
<label class="checkbox">
<input type="checkbox">
Remember me
</label>
</div>
</div>
<button type="submit" class="btn btn-primary input-block-level bold higher">
SIGN IN
</button>
</form>
<p class="center-align push-down-0">
<a data-toggle="modal" role="button" href="#forgotPassModal" data-dismiss="modal">Forgot your password?</a>
</p>
</div>
</div>

<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="registerModalLabel"><span class="light">Register</span> To Webmarket</h3>
</div>
<div class="modal-body">
<form method="post" action="#">
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
<div class="controls">
<input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username" required>
</div>
</div>
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
<div class="controls">
<input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email" required>
</div>
</div>
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputPasswordRegister">Password</label>
<div class="controls">
<input type="password" class="input-block-level" id="inputPasswordRegister" placeholder="Password" required>
</div>
</div>
<button type="submit" class="btn btn-danger input-block-level bold higher">
REGISTER
</button>
</form>
<p class="center-align push-down-0">
<a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Already Registered?</a>
</p>
</div>
</div>

<div id="forgotPassModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="forgotPassModalLabel"><span class="light">Forgot</span> your password?</h3>
</div>
<div class="modal-body">
<form method="post" action="#">
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
<div class="controls">
<input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username">
</div>
</div>
<p class="center-align">OR</p>
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
<div class="controls">
<input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email">
</div>
</div>
<button type="submit" class="btn btn-primary input-block-level bold higher">
SEND ME A NEW PASSWORD
</button>
</form>
</div>
</div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../../../connect.facebook.net/en_US/all.html#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.html"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>

<script src="js/underscore/underscore-min.js" type="text/javascript"></script>

<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

<script src="js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

<script src="js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false"></script>
<script type="text/javascript" src="js/goMap/js/jquery.gomap-1.3.2.min.js"></script>

<script src="js/custom.js" type="text/javascript"></script>
