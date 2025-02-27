<?php

require('../admin/partials/db_config.php');
require('../admin/partials/essentials.php');

date_default_timezone_set("Asia/Kolkata");

if(isset($_POST['info-form'])){
    $frm_data = filteration($_POST);
    session_start();

    $u_exist = select_query("SELECT * FROM `user_cred` WHERE `phonenum`=? AND `id`!=? LIMIT 1",
    [$data['phonenum'],$_SESSION['uId']],"ss");

    if(mysqli_num_rows($u_exist)!=0){
        echo 'phone_already';
        exit;
    }

    $query = "UPDATE `user_cred` SET `name`=?,`address`=?,`phonenum`=?,
    `pincode`=?,`dob`=? WHERE `id`=?";

    $values = [$frm_data['name'],$frm_data['address'],$frm_data['phonenum'],
    $frm_data['pincode'],$frm_data['dob'],$_SESSION['uId']];

    if(update_query($query,$values,'ssssss')){
        $_SESSION['uName'] = $frm_data['name'];
        echo 1;
    }
    else{
        echo 0;
    }
}

?>