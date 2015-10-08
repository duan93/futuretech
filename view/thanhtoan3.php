<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/checkout-step-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:57:15 GMT -->
<head>
    <meta charset="utf-8"/>
    <title>Future Tech - Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content="ProteusThemes"/> 
    <?php /*
    <script type="text/javascript">
      WebFontConfig = {
      google : {
      families : ['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic', 'Pacifico::latin']
      }
      };
      (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
      })(); 

      */ ?>

    </script> 
    <link href="../controller/stylesheets/bootstrap.css" rel="stylesheet"/>
    <link href="../controller/stylesheets/responsive.css" rel="stylesheet"/> 
    <link rel="stylesheet" href="../controller/js/rs-plugin/css/settings.css" type="text/css"/> 
    <link rel="stylesheet" href="../controller/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/> 
    <link rel="stylesheet" href="../controller/js/prettyphoto/css/prettyPhoto.css" type="text/css"/> 
    <link href="../controller/stylesheets/main.css" rel="stylesheet"/> 
    <link href="../controller/stylesheets/stylenew.css" rel="stylesheet"/> 
    <script src="../controller/js/modernizr.custom.56918.js"></script> 
    <link rel="apple-touch-icon-precomposed" sizes="144x115" href="../controller/images/apple-touch/icon.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x91" href="../controller/images/apple-touch/icon.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x58" href="../controller/images/apple-touch/icon.png"/>
    <link rel="apple-touch-icon-precomposed" href="../controller/images/apple-touch/icon.png"/>
    <link rel="shortcut icon" href="../controller/images/apple-touch/icon.png"/>
</head>
<body class=" checkout-page">
<div class="master-wrapper">
<div class="container">
<div class="row">
 
 
 
<section class="span12">
<div class="checkout-container">
<div class="row">
<div class="span10 offset1">
 
 
 
<header>
<div class="row">
<div class="span2">
<a href="index-2.html"><img src="images/logo-bw.png" alt="Webmarket Logo" width="48" height="48"/></a>
</div>
<div class="span6">
<div class="center-align">
<h1><span class="light">Choose</span> Payment Method</h1>
</div>
</div>
<div class="span2">
<div class="right-align">
<img src="images/buttons/security.jpg" alt="Security Sign" width="92" height="65"/>
</div>
</div>
</div>
</header>
 
 
 
<div class="checkout-steps">
<div class="clearfix">
<div class="step done">
<div class="step-badge"><i class="icon-ok"></i></div>
<a href="checkout-step-1.html">Shopping Cart</a>
</div>
<div class="step done">
<div class="step-badge"><i class="icon-ok"></i></div>
<a href="checkout-step-2.html">Shipping Address</a>
</div>
<div class="step active">
<div class="step-badge">2</div>
Payment Method
</div>
<div class="step">
<div class="step-badge">4</div>
Confirm &amp; Pay
</div>
</div>
</div>  
 
 
 
<span class="btn btn-danger circle pull-left"><i class="icon-chevron-down"></i></span>
<div class="shifted-left-45 clearfix">
<h3 class="no-margin"><span class="light">Credit</span> Card</h3>
<p class="push-down-30">We accept MasterCard, Visa and American Express</p>
<form action="#" method="post" class="form-horizontal form-checkout">
<div class="control-group">
<label class="control-label" for="firstName">First Name<span class="red-clr bold">*</span></label>
<div class="controls">
<input type="text" id="firstName" class="span4" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="lastName">Last Name<span class="red-clr bold">*</span></label>
<div class="controls">
<input type="text" id="lastName" class="span4" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="cardNum">Card Number<span class="red-clr bold">*</span></label>
<div class="controls">
<input type="text" id="cardNum" class="span1 card-num-input center-align" maxlength="4">
<input type="text" class="span1 card-num-input center-align" maxlength="4">
<input type="text" class="span1 card-num-input center-align" maxlength="4">
<input type="text" class="span1 card-num-input center-align add-tooltip" maxlength="4" data-title="The 16 digits on the front of the card">
</div>
</div>
<div class="control-group">
<label class="control-label" for="cvc">CVC or CVS<span class="red-clr bold">*</span></label>
<div class="controls">
<input id="cvc" type="text" class="span1 center-align add-tooltip" maxlength="3" data-title="Last 3 digits on back of card" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="exp">Expiration Date<span class="red-clr bold">*</span></label>
<div class="controls">
<select id="exp" class="input-small month-push-right">
<option value="-1">Month</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select id="exp" class="input-small">
<option value="-1">Year</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>
</div>
</div>
</form>
</div>
<hr/>
<span class="btn btn-danger circle pull-left"><i class="icon-chevron-right"></i></span>
<div class="shifted-left-45 clearfix">
<h3 class="no-margin">
<span class="light">PayPal</span> &nbsp; &nbsp; &nbsp;
<a href="#"><img src="images/buttons/paypal.gif" alt="PayPal" width="145" height="42"/></a>
</h3>
</div>
<hr/>
<p class="right-align">
In the next step you will be able to review and confirm the order &nbsp; &nbsp;
<a href="checkout-step-4.html" class="btn btn-primary higher bold">CONTINUE</a>
</p>
</div>
</div>
</div>
</section>  
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
</body>

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/checkout-step-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:57:17 GMT -->
</html>
