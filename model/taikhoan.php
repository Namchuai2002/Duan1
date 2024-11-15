<?php
 function insert_taikhoan($email, $user, $pass) {
    $sql = "INSERT INTO taikhoan (email, user, pass) VALUES ('$email', '$user', '$pass')";
    pdo_execute($sql);
}

function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id,$user,$pass,$email,$address,$tel){
$sql="update taikhoan set id='".$id."',user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}

 function loadall_taikhoan(){
    $sql="select * from taikhoan ORDER BY id DESC";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
 }
?>