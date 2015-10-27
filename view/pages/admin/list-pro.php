<!DOCTYPE html>
<?php
//if (!isset($_SESSION["\/m&coppy;admin"])) {
    //header("Location:admincontroller.php?action=admin");
//}

?>
<html>
    <?php
    include '../view/lock/header.php';
    include '../view/lock/menus.php';
    ?>
    <link href="stylesheets/table.css" rel="stylesheet">

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


    <form class="list">
        <h2>Product List</h2>
        <article class="link">
        <a href="admincontroller.php?action=add_pro_form">Add New</a>

    </article>
        <table>
            <tr class="manage1">
                <td>ID</td>
                <td>Tên sản phẩm</td>
                <td>Giá sản phẩm</td>
                <td>Hình ảnh</td>
                <td>Loại sản phẩm</td>
                <td>Giới thiệu</td>
                <td>Hãng sản xuất</td>
                <td>Cập nhật</td>
                <td>Xóa</td>

            </tr>
            <?php
                $dssp = new product();
                $result = $dssp->getList();
                while ($set = $result->fetch()):
            ?>
                <tr>
                    <td><?php echo $set['ProductID']; ?></td>
                    <td><?php echo $set['ProductName']; ?></td>
                    <td><?php echo $set['ProductPrice']; ?>đ</td>
                    <td><img width="100" height="70" src="images/dummy/products/<?php echo $set['ProductImage']; ?>" alt=""/></td>
                    <td><?php echo $set['ProductCategory']; ?></td>
                    <td><?php echo $set['ProductDesc']; ?></td>
                    <td><?php echo $set['ProductBrand']; ?></td>
                    <td>
                    <a href="admincontroller.php?action=update_pro_form">
                    <img width="32" height="32" src="images/buttons/update.png" alt=""/>
                    </a>
                    </td>
                    <td>
                    <a href="admincontroller.php?action=delete_pro_form">
                    <img width="32" height="32" src="images/buttons/delete.png" alt=""/>
                    </a>
                    </td>

                </tr>
            <?php endwhile; ?>


        </table>
    </form>


</section>
</div>
</div>
</div>



<?php
include '../view/lock/footer.php';
?>
</body>
</html>
