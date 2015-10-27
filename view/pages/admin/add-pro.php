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
            <h4 class="title">Add Product</h4>
            <form method="post" action="admincontroller.php" enctype="multipart/form-data">

                <div class="col_1_of_2 span_1_of_2">
                    <input type='hidden' name='action' value='add_pro'/>
                    <div><input type="text" name="name" placeholder="Name"></div>
                    <div><input type="text" name="price" placeholder="Price"></div>
                    <div><input type="text" name="category" placeholder="Category"></div>

                </div>
                <div class="col_1_of_2 span_1_of_2">	
                    <div><input id="choose" type="text" value="" placeholder="Choose picture..." style="cursor: pointer"/></div>
                    <input id="file" type="file" name="img" value="" style="display: none"/>


                    <button style="margin-top: 8px" type="submit" class="grey">Submit</button>

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

                <div class="clear"></div>
            </form>
        </div>
    </div>
    <?php
    include '../view/footer.php';
    ?>


</body>
</html>
