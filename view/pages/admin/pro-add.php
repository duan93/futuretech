<!doctype html>
<html>
    <?php
    /*if (!isset($_SESSION["\/m&coppy;admin"])) {
        header("Location:admincontroller.php?action=admin");
    } */
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

    <div class="register_account">
        
            <h2>Add Product</h2>
            <section class="contact-form-container">
                <form id="commentform" method="post" action="#" class="form form-inline form-contact">
                <p class="push-down-20">
                <input type="text" aria-required="true" tabindex="1" size="30" value="" id="author" name="author" required>
                <label for="author">Name<span class="red-clr bold">*</span></label>
                </p>
                <p class="push-down-20">
                <input type="email" aria-required="true" tabindex="2" size="30" value="" id="email" name="email" required>
                <label for="email">Mail<span class="red-clr bold">*</span></label>
                </p>
                <p class="push-down-20">
                <input type="text" tabindex="3" size="30" value="" id="url" name="url">
                <label for="url">Website</label>
                </p>
                <p class="push-down-20">
                <textarea class="input-block-level" tabindex="4" rows="7" cols="70" id="comment" name="comment" placeholder="Your Message goes here ..." required></textarea>
                </p>
                <p>

                </p>

                <div class="col_1_of_2 span_1_of_2">	
                    <div><input id="choose" type="text" value="" placeholder="Choose picture..." style="cursor: pointer"/></div>
                    <input id="file" type="file" name="img" value="" style="display: none"/>

                <button class="btn btn-primary bold" type="submit" tabindex="5" id="submit">Thêm</button>    


                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#choose").click(function(){
                            $("#file").click();
                            $('#file').change(function() {
                                var choose = $(this).val();
                                var lastIndex = choose.lastIndexOf("\\");
                                if (lastIndex >= 0) {
                                    choose = choose.substring(lastIndex + 1);
                                }
                                $('#choose').val(choose);
                            });
                        });
                    });
                </script>

                
            </form>
</section>
        </div>
    


</section>
</div>
</div>
</div>

    <?php
    include '../view/lock/footer.php';
    ?>


</body>
</html>
