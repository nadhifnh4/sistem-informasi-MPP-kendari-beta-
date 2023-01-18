<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from sop where idsop='$id'";
mysqli_query($con, $query);
header("location:soplist.php");?>