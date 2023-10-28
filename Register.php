<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $Fullname = $_POST['Fullname'];
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $password = $_POST['password'];    

    $con= mysqli_connect('localhost','root','','game');
        $sql="INSERT INTO `registration`(`Fullname`, `mail`, `username`,`password`) VALUES ('$Fullname','$mail','$username','$password')";
        
        $result=mysqli_query($con,$sql);
        if($result){
            header("Location: new.php");
        }
        else
        {
            echo "Not Submitted";
        }
    
}
?>