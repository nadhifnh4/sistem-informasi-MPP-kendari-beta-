<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from tabel_berita where id='$id'";
mysqli_query($con, $query);
header("location:newslist.php");?>