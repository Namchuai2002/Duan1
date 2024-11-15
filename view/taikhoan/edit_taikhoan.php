<div class="row mb ">
            <div class="boxtrai mr">
            <div class="row mb">
                  <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
                  <div class="row boxcontent formtaikhoan">
                        <?php
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                            
                        }
                        ?>
                        <form action="index.php?act=edit_taikhoan" method="post">
                        <div class="row mb10">
                        <h2>EMAIL : </h2>
                        <input type="email" name="email" id="" placeholder="email" value="<?=$email?>">
                        </div>
                        <div class="row mb10">
                        <h2>TÊN ĐĂNG NHẬP : </h2>
                        <input type="text" name="user" placeholder="user"  value="<?=$user?>">
                        </div>
                        <div class="row mb10">
                        <h2>MẬT KHẨU : </h2>
                        <input type="password" name="pass" id="" placeholder="password"  value="<?=$pass?>">
                        </div>
                        <div class="row mb10">
                        <h2>ĐỊA CHỈ: </h2>
                        <input type="text" name="address" id="" placeholder="Địa chỉ"  value="<?=$address?>">
                        </div>
                        <div class="row mb10">
                        <h2>ĐIỆN THOẠI : </h2>
                        <input type="text" name="tel" id="" placeholder="SDT"  value="<?=$tel?>">
                        </div>
                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                        </div>
                    </form>
                    <h2 class="thongbao">
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                    </h2>
</div>
</div>
            </div>
            <div class="boxphai">
            <?php include"view/boxright.php";?>
            </div>
        </div>