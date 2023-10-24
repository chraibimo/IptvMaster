<?php
if(isset($_POST['Submit'])){
$conx=mysqli_connect('localhost','root','','iptv');

$email=$_POST['email'];
$password=$_POST['password'];
$requete="INSERT INTO clients (email,Password) VALUES('$email','$password')";
$query=mysqli_query($conx,$requete);
if (isset($query)){
    header('location: home.html');
    die();
    
}
}
?>
