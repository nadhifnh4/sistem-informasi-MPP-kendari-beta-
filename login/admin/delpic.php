<?php
include 'koneksi.php';
$id   = $_GET['id'];

$query="DELETE from ttgpic where idttg='$id'";
mysqli_query($con, $query);
header("location:piclist.php");?>