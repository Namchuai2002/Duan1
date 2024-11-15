
               <div class="row mb ">
                  <div class="boxtitle">TÀI KHOẢN</div>
                  <div class="boxcontent formtaikhoan">
                    <?php
                    if(isset($_SESSION['user'])){
                      extract($_SESSION['user']);
                    
                    ?>
                    <div class="row mb10">
                        XIN CHÀO : <?=$user?> 
                      </div>
                      <li>
                        <a href="index.php?act=quenmk">Quên mật khẩu</a>
                    </li>
                    <li>
                        <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản.</a>
                    </li>
                    <?php if($role==1){ ?>
                    <li>
                        <a href="admin/index.php">Đăng nhập admin.</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="index.php?act=thoat">Thoát.</a>
                    </li>
                    <?php
                    }else {

                    
                    ?>
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row mb10">
                        Tên đăng nhập: </div>
                        <input type="text" name="user" id=""><br>
                        <div class="row mb10">
                        Mật khẩu: </div>
                        <div class="row mb10">
                        <input type="password" name="pass" id=""></div>
                        <div class="row mb10">
                        <input type="checkbox" name="" id="">Ghi nhớ tài khoản?</div>
                        <div class="row mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap"></div>
                    </form>
                    <li>
                        <a href="#">Quên mật khẩu</a>
                    </li>
                    <li>
                        <a href="index.php?act=dangky">Đăng kí thành viên</a>
                    </li>
                    <?php } ?>
                  </div>
               </div>
               <div class="row mb">
                  <div class="boxtitle">DANH MỤC</div>
                  <div class="boxcontent2 menudoc">
                    <ul>
                      <?php
                      foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
                    }                    
                      ?>
                        <!-- <li><a href="#">Đồng hồ</a></li>
                        <li><a href="#">Laptop</a></li>
                        <li><a href="#">Điện Thoại</a></li>
                        <li><a href="#">Table</a></li>
                        <li><a href="#">Tai nghe</a></li>
                        <li><a href="#">Máy tính</a></li> -->
                    </ul>
                  </div>
                  <div class="boxfooter searbox">
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
                        <input type="submit" name="timkiem" value="Tìm kiếm">
                    </form>
                  </div>
               </div>
               <div class="row">
                  <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                  <div class=" row boxcontent">
                    <?php
                    foreach ($dstop10 as $sp) {
                      extract($sp);
                      $link = "index.php?act=sanphamct&idsp=" . $id;
                      $img = $img_path . $img;
                      echo '<div class="row mb10 top10">
                              <img src="' . $img . '" alt="">
                              <a href="' . $link . '">' . $name . '</a>
                            </div>';
                  }
                  
                    ?>
                    <!-- <div class="row mb10 top10">
                        <img src="view/images/anh1.png" alt="">
                        <a href="#">apple watch ultra 2</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh2.png" alt="">
                        <a href="#">samsung galaxy watch 7 đồng</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh3.png" alt="">
                        <a href="#"> galaxy watch ultra</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh4.png" alt="">
                        <a href="#">iphone 15 plus</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh5.png" alt="">
                        <a href="#"> apple watch series 9</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh6.png" alt="">
                        <a href="#">macbook air m3 15 inch</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh7.png" alt="">
                        <a href="#"> tai nghe airpods</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh8.png" alt="">
                        <a href="#">macbook air m3</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh9.png" alt="">
                        <a href="#"> Loa Marshall</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/anh10.png" alt="">
                        <a href="#">Sony WF-C500</a>
                    </div> -->
                  </div>
               </div>
