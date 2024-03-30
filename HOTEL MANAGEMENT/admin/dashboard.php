<?php
require('partials/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('partials/links.php');?>
</head>
<body class="bg-white">

<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between ">
    <h3 class="mb-0">Admin Panel</h3>
    <a href="logout.php" class="btn btn-light btn-sm" >LOG OUT</a>
</div>


</body>
</html>