<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from instansi where idins='$id'";
mysqli_query($con, $query);
header("location:inslist.php");?>