<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from ourteam where idteam='$id'";
mysqli_query($con, $query);
header("location:crewlist.php");?>