<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
                <div class="row frmcontent">
                    <form action="index.php?act=adddm" method="post">
                        <div class="row mb10">
                            MÃ LOẠI : <BR>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                TÊN LOẠI : <br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                   <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                </div>
                </form>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                </div>
        </div>
    </div>