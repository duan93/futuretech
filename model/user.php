<?php
//kết nối với database
$connect = mysql_connect("Localhost","root","") or die ("Loi ket noi co so du lieu");
//kết nối với database login_ass2
$select_db = mysql_select_db("ten_data_base" , $connect) or die ("Loi ket noi database");
?>