<?php
require('partials/essentials.php');
require('partials/db_config.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Users</title>
    <?php require('partials/links.php');?>

</head>

<body class="bg-white">

    <?php require('partials/header.php');?>

    <div class="container-fluid " id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Users</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="text-end mb-4">
                            <input type="text" oninput="search_user(this.value)" class="form-control shadow-none w-25 ms-auto" placeholder="Type anything to search">
                        </div>

                        <div class="table-responsive" >
                            <table class="table table-hover border text-center" style="min-width:1300px;">
                                <thead>
                                    <tr>
                                        <th class="bg-dark text-light" scope="col">#</th>
                                        <th class="bg-dark text-light" scope="col">Name</th>
                                        <th class="bg-dark text-light" scope="col">Email</th>
                                        <th class="bg-dark text-light" scope="col">Phone no.</th>
                                        <th class="bg-dark text-light" scope="col">Location</th>
                                        <th class="bg-dark text-light" scope="col">DOB</th>
                                        <th class="bg-dark text-light" scope="col">Status</th>
                                        <th class="bg-dark text-light" scope="col">Date</th>
                                        <th class="bg-dark text-light" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="users-data">
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>




    <?php require('partials/scripts.php');?>
    
    <script src="scripts/users.js"></script>

</body>

</html>

<!-- 59:00 -->