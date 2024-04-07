<?php

$hname='localhost';
$uname='root';
$pass='';
$db='serenitypeak';

$con = mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
die("Cannot Connect to Database".mysqli_connect_error());
}

function filteration($data){
    foreach($data as $key => $value){
        $value=trim($value);              // removes extra spaces
        $value=stripslashes($value);      // removes slashes
        $value=strip_tags($value);        // removes html tags
        $value=htmlspecialchars($value);  // converts html special char into html entity

        $data[$key] = $value;
    }
    return $data;
}

function selectAll($table){
    $con =  $GLOBALS['con'];
    $res = mysqli_query($con,"SELECT * FROM $table");
    return $res;
}

function select_query($sql, $values, $datatypes) {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else {
            // Store and handle errors effectively
            $error = mysqli_stmt_error($stmt);
            mysqli_stmt_close($stmt);

            // Improve error message with context
            die("Error executing query: $sql\n" . $error);
        }
    } else {
        // Handle preparation errors gracefully
        $error = mysqli_error($con);
        die("Error preparing query: $sql\n" . $error);
    }
}

function update_query($sql, $values, $datatypes){
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else {
            // Store and handle errors effectively
            $error = mysqli_stmt_error($stmt);
            mysqli_stmt_close($stmt);

            // Improve error message with context
            die("Error executing query -UPDATE :  $sql\n" . $error);
        }
    } else {
        // Handle preparation errors gracefully
        $error = mysqli_error($con);
        die("Error preparing query -UPDATE : $sql\n" . $error);
    }
}

function insert_query($sql, $values, $datatypes){
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else {
            // Store and handle errors effectively
            $error = mysqli_stmt_error($stmt);
            mysqli_stmt_close($stmt);

            // Improve error message with context
            die("Error executing query -INSERT :  $sql\n" . $error);
        }
    } else {
        // Handle preparation errors gracefully
        $error = mysqli_error($con);
        die("Error preparing query -INSERT : $sql\n" . $error);
    }
}

function delete_query($sql, $values, $datatypes){
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else {
            // Store and handle errors effectively
            $error = mysqli_stmt_error($stmt);
            mysqli_stmt_close($stmt);

            // Improve error message with context
            die("Error executing query -DELETE :  $sql\n" . $error);
        }
    } else {
        // Handle preparation errors gracefully
        $error = mysqli_error($con);
        die("Error preparing query -DELETE : $sql\n" . $error);
    }
}

?>