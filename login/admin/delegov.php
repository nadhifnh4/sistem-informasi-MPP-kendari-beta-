<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from egov where ideg='$id'";
mysqli_query($con, $query);
header("location:egovlist.php");?>