<html>
    <body>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    $Fullname = $_POST['fullname'];
    $mail = $_POST['mail'];
    $message=$_POST['message'];

    $con= mysqli_connect('localhost','root','','game');
        $sql="INSERT INTO `contact`(`fullname`, `mail`, `message`) VALUES ('$Fullname','$mail','$message')";
        
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Submitted";
        }
        else
        {
            echo "Not Submitted";
        }
    
}
?>
<div>
<form action="index.php" method="post">
    <div class="contact" id="contact">
            <img src="Contact.jpg">
            <div class="form">
                <h1>Contact</h1>
                <div class="inputBx">
                    <p>Enter Name</p>
                    <input type="text" required name="fullname" placeholder="Full Name">
                </div>
                <div class="inputBx">
                    <p>Enter Email</p>
                    <input type="email" required name="mail" placeholder="Enter Your Email">
                </div>
                <div class="inputBx">
                    <p>Message</p>
                    <textarea name="message" required placeholder="Type here..."></textarea>
                </div>
                <!--<div class="inputBx">
                    <input type="submit" name="Submit" >
                </div>-->
                <button type="submit"> Submit</button>
            </div>
                
        </div>
        </form>
</div>
</body>
</html>