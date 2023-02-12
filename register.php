<?php
    session_start();
    header('location:./index.html');
    $con=mysqli_connect('localhost','root');

    if($con){
        echo 'connected';
    }
    else{
        echo 'gand mara';
    }
    mysqli_select_db($con,'arcade');
    $name=$_POST['emai'];
    $password=$_POST['password'];

    $quer="SELECT * FROM `logs` WHERE  username='$name' && password='$password'";
    $result=mysqli_query($con,$quer);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo "duplicate";
    }
    else{
        $querr="INSERT INTO `logs` (`username`, `password`) VALUES (`$name1`, `$password`)";
        
        $result=mysqli_query($con,$querr);
    }
?>