<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from spp where idspp='$id'";
mysqli_query($con, $query);
header("location:spplist.php");?>