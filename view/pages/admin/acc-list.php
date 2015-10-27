<!DOCTYPE html>
<?php
if (!isset($_SESSION["\/m&coppy;admin"])) {
    header("Location:admincontroller.php?action=admin");
}
$dskh = new customer();
$result = $dskh->getList();
?>
<html>
    <?php
    include '../view/head.php';
    ?>

    <form class="list">
        <h2>Customer List</h2>
        <table>
            <tr class="manage1">
                <td>ID</td>
                <td>Name</td>
                <td>Age</td>
                <td>Email</td>
                <td>Address</td>
                <td>City</td>
                <td>Phone</td>
            </tr>
            <?php while ($set = $result->fetch()): ?>
                <tr>
                    <td><?php echo $set['id']; ?></td>
                    <td><?php echo $set['name']; ?></td>
                    <td><?php echo $set['age']; ?></td>
                    <td><?php echo $set['email']; ?></td>
                    <td><?php echo $set['address']; ?></td>
                    <td><?php echo $set['city']; ?></td>
                    <td><?php echo $set['phone']; ?></td>

                </tr>
            <?php endwhile; ?>

        </table>
    </form>
    <article class="link">
        <a href="admincontroller.php?action=add_acc_form">Add New</a>
        <a href="admincontroller.php?action=update_acc_form">Update</a>
        <a href="admincontroller.php?action=del_acc_form">Delete</a>
        <br clear="both">
    </article>



    <?php
    include '../view/footer.php';
    ?>
</body>
</html>