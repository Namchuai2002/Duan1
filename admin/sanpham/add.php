<?php
$listdanhmuc = loadall_danhmuc();
?>

<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI SẢN PHẨM</h1></div>
                <div class="row frmcontent">
                    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb10">

                DANH MỤC: <BR>
                <select name="iddm" id="">
                <?php
               foreach ($listdanhmuc as $danhmuc) {
               extract($danhmuc);
               echo '<option value="'.$id.'">'.$name.'</option>';
}
?>
                </select>
                </div>

                <div class="row mb10">
                TÊN SẢN PHẨM : <br>
                    <input type="text" name="tensp">
                </div>

                <div class="row mb10">
                GIÁ : <br>
                    <input type="text" name="giasp">
                </div>

                <div class="row mb10">
                HÌNH: <br>
                    <input type="file" name="hinh" >
                </div>

                <div class="row mb10">
                MÔ TẢ : <br>
                    <textarea name="mota" cols="30" rows="10"></textarea>
                </div>

                <div class="row mb10">
                    <input type="submit" name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                   <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                </div>
                </form>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                </div>
        </div>
    </div> 