<?php session_start();

include('connect.php');
$src=$_SESSION['myId'];
$des=$_POST['to'];
$msg=$_POST['msg'];
$date= date("Y-m-d");
$sql = "insert into messages(exp,des,message,dateEnvoi) VALUES($src,$des,'$msg','$date');";
if (mysqli_query($con,$sql)){
    echo "<script>document.location = 'chat.php?id=$des';</script>";
}else{
    echo "<script>document.location = 'chat.php?id=$des';</script>";


}