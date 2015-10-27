<?php

session_start();

include '../model/connect.php';
include '../model/product.php';
/*
include '../model/customer.php';
include '../model/fields.php';
include '../model/validate.php';
include '../model/cart.php';

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('name', 'All characters are uppercase.');
$fields->addField('age', 'zxcvbnm');
$fields->addField('email', 'Must be a valid email address.');
$fields->addField('password', 'Must be at least 6 characters.');
$fields->addField('verify');
$fields->addField('address', 'fghjkfghj.');
$fields->addField('city', 'mnbvcxz');
$fields->addField('phone', 'Use 999.999.9999 format.');
*/
if (isset($_POST["action"]))
    $action = $_POST["action"];
elseif (isset($_GET["action"]))
    $action = $_GET["action"];
else
    $action = "home";

switch ($action) {
    case "home":
        include '../view/home.php';
        break;
    case "product-list":
        include '../view/sanpham.php';
        break;
    case "acc_login_form":
        session_destroy();
        include '../view/acc_login.php';
        break;
    case "register_form":
        include '../view/register.php';
        break;
    case "detail_pro":
        include '../view/detail_pro.php';
        break;
    case "order_cart":
        include '../view/order_pro.php';
        break;
    case "order":
        echo add_item($_POST['productkey'], $_POST['itemqty']);
        include '../view/order_pro.php';
        break;
    case "update_cart":
        $new_list = $_POST['newqty'];

        foreach ($new_list as $key => $qty):
            if ($_SESSION['cartview'][$key] != $qty) {
                update_item($key, $qty);
            }

        endforeach;
        include '../view/order_pro.php';
        break;
    case "delete_cart":
        unset($_SESSION['cartview']);
        include '../view/order_pro.php';
        break;
    case "register":


        // Copy form values to local variables
        $email = trim($_POST['email']);
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $password = md5($_POST['password']);
        $address = $_POST['address'];
        $verify = md5($_POST['verify']);
        $phone = $_POST['phone'];
        // Validate form data

        $validate->email('email', $email);
        $validate->age('age', $age);
        $validate->name('name', $name);
        $validate->verify('verify', $password, $verify);
        $validate->address('address', $address);
        $validate->city('city', $city);
        $validate->phone('phone', $phone);
        // Load appropriate view based on hasErrors
        if ($fields->hasErrors()) {
            include '../view/register.php';
        } else {

            /*
              $name = $_POST['name'];
              $age = $_POST['age'];
              $mail = $_POST['email'];
              $pass = md5($_POST['pass']);
              $address = $_POST['address'];
              $city = $_POST['city'];
              $phone = $_POST['phone'];
             */

            $add = new customer(Null, $name, $age, $email, $password, $address, $city, $phone);
            $result = $add->insert();
            header("location:?action=acc_login_form");
        }
        break;
    case "acc_login":
        $User = $_POST["email"];
        $Pass = md5($_POST["password"]);
        $ad = new customer();
        $ar = $ad->login($User, $Pass);
        if ($ar[0] == 0) {
            echo "Login Failed";
            include ("../view/login_order.php");
        } else if ($ar[0] == 1) {
            $_SESSION["\/m&coppy;fptp$02241"] = $ar[1];
            include ("../view/home.php");
        } else {
            include ("../view/login_order.php");
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
