<?php
if(isset($_POST['Submit'])){
    $conx=mysqli_connect('localhost','root','','iptv');
    $email=$_POST['email'];
    $password =$_POST['password'];
    $sql="SELECT * FROM clients where email='$email' and password='$password'";
    $query=mysqli_query($conx,$sql);
    $numrows=mysqli_num_rows($query);
    if($numrows>0){ $row= $query->fetch_assoc();
        $_SESSION['login']=$login;
        header('location:home.html');
       

    }else{
        echo'erreur';
    }
}
?>