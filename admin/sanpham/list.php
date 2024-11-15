<div class="row">
            <div class="row frmtitle mb">
                <h1>DANH SÁCH HÀNG HÓA</h1></div>

                <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                <?php
               foreach ($listdanhmuc as $danhmuc) {
               extract($danhmuc);
               echo '<option value="'.$id.'">'.$name.'</option>';
}
?>
                </select>
                <input type="submit" name="listok" value="LỌC">

                
            </form>
                <div class="row frmcontent">
                    <DIv class="row mb10 frmdsloai">
                        <Table>
                            <tr>
                                <th></th>
                                <th>Mã loại</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình</th>
                                <th>Giá</th>
                                <th>Lượt xem</th>
                                <th></th>
                            </tr>
                            <?php
                            foreach ($listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $hinhpath="../upload/".$img;
                               
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                                } else {
                                    $hinh = "no photo";
                                }
                                echo' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$luotxem.'</td>
                                <td> <a href="'.$suasp.'"><input type="button" value="Sửa"></a>  
                                <a href="'.$xoasp.'"><input type="button" value="Xóa"></a> </td>
                            </tr>';
                            }
                            ?>
                    
                        </Table>
                    </DIv>
                    <DIv class="row mb10">
                        <input type="button" value="CHỌN TẤT CẢ">
                        <input type="button" value="BỎ CHỌN TẤT CẢ">
                        <input type="button" value="XÓA MỤC ĐÃ CHỌN">
                        <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM"></a>
                    </DIv>
                </div>
        </div>