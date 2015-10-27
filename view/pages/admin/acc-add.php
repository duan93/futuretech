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
            <h4 class="title">Add Account</h4>
            <form method="post" action="admincontroller.php">

                <div class="col_1_of_2 span_1_of_2">
                    <input type='hidden' name='action' value='add_acc'/>
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="age" placeholder="Age">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="pass" placeholder="Password">
                </div>
                <div class="col_1_of_2 span_1_of_2">	
                    <input type="text" name="address" placeholder="Address">
                    <select id="country" name="city" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">Select a Province - City</option>         
                        <option value="AG">An Giang</option>
                        <option value="BR-VT">Bà Rịa - Vũng Tàu</option>
                        <option value="BG">Bắc Giang</option>
                        <option value="BK">Bắc Kạn</option>
                        <option value="BL">Bạc Liêu</option>
                        <option value="BN">Bắc Ninh</option>
                        <option value="BT">Bến Tre</option>
                        <option value="BĐ">Bình Định</option>
                        <option value="BD">Bình Dương</option>
                        <option value="BP">Bình Phước</option>
                        <option value="BTn">Bình Thuận</option>
                        <option value="CM">Cà Mau</option>
                        <option value="CB">Cao Bằng</option>
                        <option value="CT">Cần Thơ</option>
                        <option value="ĐN">Đà Nẵng</option>
                        <option value="ĐL">Đắk Lắk</option>
                        <option value="ĐNô">Đắk Nông</option>
                        <option value="ĐB">Điện Biên</option>
                        <option value="ĐNa">Đồng Nai</option>
                        <option value="ĐT">Đồng Tháp</option>
                        <option value="GL">Gia Lai</option>
                        <option value="HG">Hà Giang</option>
                        <option value="HN">Hà Nội</option>
                        <option value="HT">Hà Tĩnh</option>
                        <option value="HD">Hải Dương</option>
                        <option value="HP">Hải Phòng</option>
                        <option value="HG">Hậu Giang</option>
                        <option value="HB">Hòa Bình</option>
                        <option value="HY">Hưng Yên</option>
                        <option value="KH">Khánh Hòa</option>
                        <option value="KG">Kiên Giang</option>
                        <option value="KT">Kon Tum</option>
                        <option value="LC">Lai Châu</option>
                        <option value="LĐ">Lâm Đồng</option>
                        <option value="LS">Lạng Sơn</option>
                        <option value="LCa">Lào Cai</option>
                        <option value="LA">Long An</option>
                        <option value="NĐ">Nam Định</option>
                        <option value="NA">Nghệ An</option>
                        <option value="NB">Ninh Bình</option>
                        <option value="NT">Ninh Thuận</option>
                        <option value="PT">Phú Thọ</option>
                        <option value="QB">Quảng Bình</option>
                        <option value="QNa">Quảng Nam</option>
                        <option value="QNg">Quảng Ngãi</option>
                        <option value="QN">Quảng Ninh</option>
                        <option value="QT">Quảng Trị</option>
                        <option value="ST">Sóc Trăng</option>
                        <option value="SL">Sơn La</option>
                        <option value="TNi">Tây Ninh</option>
                        <option value="TB">Thái Bình</option>
                        <option value="TN">Thái Nguyên</option>
                        <option value="TH">Thanh Hóa</option>
                        <option value="TTH">Thừa Thiên Huế</option>
                        <option value="HCM">TP.HCM</option>
                        <option value="TG">Tiền Giang</option>
                        <option value="TV">Trà Vinh</option>
                        <option value="TQ">Tuyên Quang</option>
                        <option value="VL">Vĩnh Long</option>
                        <option value="VP">Vĩnh Phúc</option>
                        <option value="YB">Yên Bái</option>
                        <option value="PY">Phú Yên</option>
                    </select>	        

                    <input type="text" name="phone" placeholder="Phone Number"/>
                    <button style="margin-top: 7px" type="submit" class="grey">Submit</button>
                </div>

                <div class="clear"></div>
            </form>
        </div>
    </div>
    <?php
    include '../view/footer.php';
    ?>


</body>
</html>
