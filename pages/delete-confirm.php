<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:admin_login.php');  
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM `course_info` WHERE Student_ID = $id";
    $result = mysqli_query($conn, $sql);

    $sql = "DELETE FROM `other_grants` WHERE Student_ID = $id";
    $result = mysqli_query($conn, $sql);

    $sql = "DELETE FROM `relative_dependent_occupation` WHERE Student_ID = $id";
    $result = mysqli_query($conn, $sql);

    $sql = "DELETE FROM `scholarship_info` WHERE Student_ID = $id";
    $result = mysqli_query($conn, $sql);

    $sql = "DELETE FROM `scholar_basic_info` WHERE Student_ID = $id";
    $result = mysqli_query($conn, $sql);

    $sql = "DELETE FROM `studparents_occupation` WHERE Student_ID = $id";
    $result = mysqli_query($conn, $sql);

    $sql = "DELETE FROM `stud_allowance_dependency` WHERE Student_ID = $id";
    $result = mysqli_query($conn, $sql);

    $sql = "DELETE FROM `stud_employ_status` WHERE Student_ID = $id";
    $result = mysqli_query($conn, $sql);

    header('location:delete.php');
}

?>