<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH HÀNG HÓA</h1></div>
                <div class="row frmcontent">
                    <DIv class="row mb10 frmdsloai">
                        <Table>
                            <tr>
                                <th></th>
                                <th>Mã loại</th>
                                <th>Tên loại</th>
                                <th></th>
                            </tr>
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;

                                echo' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td> <a href="'.$suadm.'"><input type="button" value="Sửa"></a>  
                                <a href="'.$xoadm.'"><input type="button" value="Xóa"></a> </td>
                            </tr>';
                            }
                            ?>
                    
                        </Table>
                    </DIv>
                    <DIv class="row mb10">
                        <input type="button" value="CHỌN TẤT CẢ">
                        <input type="button" value="BỎ CHỌN TẤT CẢ">
                        <input type="button" value="XÓA MỤC ĐÃ CHỌN">
                        <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM"></a>
                    </DIv>
                </div>
        </div>