<!doctype html>
<html>
    <?php
    if (!isset($_SESSION["\/m&coppy;admin"])) {
        header("Location:admincontroller.php?action=admin");
    }
    include '../view/head.php';
    ?>
    <div class="register_account">
        <div class="wrap">
            <h4 class="title">Update Product</h4>
            <form method="post" action="admincontroller.php" enctype="multipart/form-data">

                <div class="col_1_of_2 span_1_of_2">
                    <input type='hidden' name='action' value='update_pro'/>
                    <input type="text" name="id" placeholder="Enter product Id">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="price" placeholder="Price">
                </div>
                
                <div class="col_1_of_2 span_1_of_2">
                    <input type="text" name="category" placeholder="Category">
                    <input class="choose" type="text" value="" placeholder="Choose picture..." style="cursor: pointer"/>
                    <input class="file" type="file" name="img" value="" style="display: none"/>
                    <button style="margin-top: 8px" type="submit" class="grey">Submit</button>
                </div>
                
                <script type="text/javascript">
                    $(document).ready(function(){
                        $(".choose").click(function(){
                            $(".file").click();
                            
                           
                        });
                    });
                </script>

                <div class="clear"></div>
            </form>
        </div>
    </div>
    <?php
    include '../view/footer.php';
    ?>


</body>
</html>
