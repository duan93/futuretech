<?php
session_start();
include ("../model/user.php");

//xủ lý đăng nhập
if(isset($_POST['login']))
{
    if($_POST['username']==""){
        $is_error="Chưa điền tên người dùng";
    }
    else if ($_POST['password']==""){
        $is_error="Chưa điền mật khẩu";
    }
    else{

        //xử lý đăng nhập
        $s="select * from khach_hang where username='".$_POST['username']."'";
        $q=mysql_query($s);
        if($r=mysql_fetch_array($q)){

            //kiểm tra có đúng mật khẩu
            if($r['password']==md5($_POST['password']))

            {
                //đúng mật khẩu
                //$_SESSION['user']=$r['fullname'];
                //header("location:../view/admin_manager.php");
                
                if($r["level"]=="1"){
                    $_SESSION["admin"];
                }
            }
            else{
                $is_error="sai mật khẩu";
            }
        }
        else{
            $is_error="Người dùng không đúng";
        }
    }
}
include("../view/login.php");
?>