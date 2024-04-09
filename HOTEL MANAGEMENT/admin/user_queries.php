<?php
require('partials/essentials.php');
require('partials/db_config.php');
adminLogin();

if(isset($_GET['seen'])){
    $frm_data = filteration($_GET);

    if($frm_data['seen']=='all')
    {
        $q = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if(update_query($q,$values,'i')){
            alert('success','Marked all as read');
        }
        else{
            alert('error','Operation Failed');
        }
    }
    else
    {
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $values = [1,$frm_data['seen']];
        if(update_query($q,$values,'ii')){
            alert('success','Marked as read');
        }
        else{
            alert('error','Operation Failed');
        }
    }
}

if(isset($_GET['del'])){
    $frm_data = filteration($_GET);

    if($frm_data['del']=='all')
    {
        $q = "DELETE FROM `user_queries`";
        if(mysqli_query($con,$q)){
            alert('success','All Data deleted');
        }
        else{
            alert('error','Operation Failed');
        }
    }
    else
    {
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $values = [$frm_data['del']];
        if(delete_query($q,$values,'i')){
            alert('success','Data deleted');
        }
        else{
            alert('error','Operation Failed');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Queries</title>
    <?php require('partials/links.php');?>

</head>

<body class="bg-white">

    <?php require('partials/header.php');?>
    <?php require('partials/scripts.php');?>

    <div class="container-fluid " id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">User Queries</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="text-end mb-4">
                            <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
                                <i class="bi bi-check-all"> </i>Mark all read</a>
                            <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
                                <i class="bi bi-trash"> </i>Delete all read</a>
                        </div>

                        <div class="table-responsive-md" style="height:450px; overflow-y:scroll; ">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr>
                                        <th class="bg-dark text-light" scope="col">#</th>
                                        <th class="bg-dark text-light" scope="col">Name</th>
                                        <th class="bg-dark text-light" scope="col">Email</th>
                                        <th class="bg-dark text-light" scope="col" width="20%">Subject</th>
                                        <th class="bg-dark text-light" scope="col" width="30%">Message</th>
                                        <th class="bg-dark text-light" scope="col">Date</th>
                                        <th class="bg-dark text-light" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                                    $data = mysqli_query($con,$q);
                                    $i = 1;
                                    
                                    while($row = mysqli_fetch_assoc($data)){
                                        $seen='';
                                        if($row['seen']!=1){
                                            $seen= "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";
                                        }
                                        $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                        echo<<<query
                                        <tr>
                                        <td>$i</td>
                                        <td>$row[name]</td>
                                        <td>$row[email]</td>
                                        <td>$row[subject]</td>
                                        <td>$row[message]</td>
                                        <td>$row[date]</td>
                                        <td>$seen</td>
                                        </tr> 
                                        query;
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>