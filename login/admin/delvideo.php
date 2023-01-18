<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from tabel_video where idv='$id'";
mysqli_query($con, $query);
header("location:videolist.php");?>