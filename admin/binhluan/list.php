<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH BÌNH LUẬN</h1></div>
                <div class="row frmcontent">
                    <DIv class="row mb10 frmdsloai">
                        <Table>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Nội dung</th>
                                <th>Iduser</th>
                                <th>Idpro</th>
                                <th>Ngày bình luận</th>
                                <th></th>
                            </tr>
                            <?php
                            foreach ($listbinhluan as $binhluan){
                                extract($binhluan);
                                $suabl="index.php?act=suabl&id=".$id;
                                $xoabl="index.php?act=xoabl&id=".$id;

                                echo' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a> </td>
                            </tr>';
                            }
                            ?>
                    
                        </Table>
                    </DIv>
                    <DIv class="row mb10">
                        <input type="button" value="CHỌN TẤT CẢ">
                        <input type="button" value="BỎ CHỌN TẤT CẢ">
                        <input type="button" value="XÓA MỤC ĐÃ CHỌN">
                    </DIv>
                </div>
        </div>