<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from faq where idfaq='$id'";
mysqli_query($con, $query);
header("location:faqlist.php");?>