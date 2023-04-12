<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');  
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "TRUNCATE TABLE `course_info`";
    $result = mysqli_query($conn, $sql);

    $sql = "TRUNCATE TABLE `other_grants`";
    $result = mysqli_query($conn, $sql);

    $sql = "TRUNCATE TABLE `relative_dependent_occupation`";
    $result = mysqli_query($conn, $sql);

    $sql = "TRUNCATE TABLE `scholarship_info`";
    $result = mysqli_query($conn, $sql);

    $sql = "TRUNCATE TABLE `scholar_basic_info`";
    $result = mysqli_query($conn, $sql);

    $sql = "TRUNCATE TABLE `studparents_occupation`";
    $result = mysqli_query($conn, $sql);

    $sql = "TRUNCATE TABLE `stud_allowance_dependency`";
    $result = mysqli_query($conn, $sql);

    $sql = "TRUNCATE TABLE `stud_employ_status`";
    $result = mysqli_query($conn, $sql);

    header('location:delete.php');
}

?>