<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from layanan where idlyn='$id'";
mysqli_query($con, $query);
header("location:lynlist.php");?>