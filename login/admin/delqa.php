<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from qna where idqa='$id'";
mysqli_query($con, $query);
header("location:qnalist.php");?>