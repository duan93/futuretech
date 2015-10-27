<?php

session_start();

include '../model/connect.php';
include '../model/product.php';
//include '../model/customer.php';
//include '../model/admin.php';



if (isset($_POST["action"]))
    $action = $_POST["action"];
elseif (isset($_GET["action"]))
    $action = $_GET["action"];
else
    $action = "admin";

switch ($action) {
    case "admin":
        if (isset($_SESSION["\/m&coppy;admin"])) {
            include ("../view/list_acc.php");
        } else {
            session_destroy();
            include '../view/admin_login.php';
        }
        break;
    case "list_pro":
        include '../view/pages/admin/pro-list.php';
        break;
    case "list_acc":
        include '../view/pages/admin/acc-list.php';
        break;
    case "add_pro_form":
        include '../view/insert_pro.php';
        break;
    case "update_pro_form":
        include '../view/update_pro.php';
        break;
    case "del_pro_form":
        include '../view/del_pro.php';
        break;
    case "add_acc_form":
        include '../view/insert_acc.php';
        break;
    case "update_acc_form":
        include '../view/update_acc.php';
        break;
    case "del_acc_form":
        include '../view/del_acc.php';
        break;
// add product
    case "add_pro":
        $path = getcwd() . DIRECTORY_SEPARATOR . 'images';


        if (isset($_FILES['img'])) {
            $filename = $_FILES['img']['name'];
            if (empty($filename)) {
                break;
            }
            $source = $_FILES['img']['tmp_name'];
            $target = $path . DIRECTORY_SEPARATOR . $filename;
            move_uploaded_file($source, $target);
        }


        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $img = $filename;

        $add = new product(NULL, $name, $price, $category, $img);
        $result = $add->insert();
        header("location:?action=list_pro");
        break;

// update product
    case "update_pro":
         $path = getcwd() . DIRECTORY_SEPARATOR . 'images';


        if (isset($_FILES['img'])) {
            $filename = $_FILES['img']['name'];
            if (empty($filename)) {
                break;
            }
            $source = $_FILES['img']['tmp_name'];
            $target = $path . DIRECTORY_SEPARATOR . $filename;
            move_uploaded_file($source, $target);
        }

        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $img = $filename;

        $udt = new product($id, $name, $price, $category, $img);
        $result = $udt->update();
        header("location:?action=list_pro");
        break;

// delete product
    case "del_pro":
        $id = $_POST['id'];

        $del = new product($id, Null, Null, Null, Null);
        $result = $del->delete();
        header("location:?action=list_pro");
        break;

// add customer
    case "add_acc":

        $name = $_POST['name'];
        $age = $_POST['age'];
        $mail = $_POST['email'];
        $pass = md5($_POST['pass']);
        $address = $_POST['address'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];


        $add = new customer(Null, $name, $age, $mail, $pass, $address, $city, $phone);
        $result = $add->insert();
        header("location:?action=list_acc");
        break;

// update customer
    case "update_acc":
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $mail = $_POST['email'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];

        $udt = new customer($id, $name, $age, $mail, $pass, $address, $city, $phone);
        $result = $udt->update();
        header("location:?action=list_acc");
        break;

// delete customer
    case "del_acc":
        $id = $_POST['id'];

        $del = new customer($id, Null, Null, Null, Null, Null, Null, Null);
        $result = $del->delete();
        header("location:?action=list_acc");
        break;


    // login  
    case "login":
        $Id = $_POST["admin"];
        $Pass = md5($_POST["password"]);
        $ad = new admin();
        $ar = $ad->login($Id, $Pass);
        if ($ar[0] == 0) {
            echo "Login Failed";
        } else if ($ar[0] == 1) {
            $_SESSION["\/m&coppy;admin"] = $ar[1];
            include ("../view/list_pro.php");
        } else {
            include ("../view/admin_login.php");
        }
        break;
    case "logout":
         $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
            );
        }
        // Finally, destroy the session.
        session_destroy();
        include "../view/acc_login.php";
        break;
}
?>
