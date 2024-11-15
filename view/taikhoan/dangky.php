<div class="row mb ">
            <div class="boxtrai mr">
            <div class="row mb">
                  <div class="boxtitle">ĐĂNG KÍ THÀNH VIÊN</div>
                  <div class="row boxcontent formtaikhoan">
                    <form action="index.php?act=dangky" method="post">
                        <div class="row mb10">
                        <h2>EMAIL : </h2>
                        <input type="email" name="email" id="" placeholder="email">
                        </div>
                        <div class="row mb10">
                        <h2>TÊN ĐĂNG NHẬP : </h2>
                        <input type="text" name="user" placeholder="user">
                        </div>
                        <div class="row mb10">
                        <h2>MẬT KHẨU : </h2>
                        <input type="password" name="pass" id="" placeholder="password">
                        </div>
                        <div class="row mb10">
                        <input type="submit" value="Đăng ký" name="dangky">
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