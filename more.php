<html>
    <head >
        <meta charset = " UTF - 8 " >
        <meta name = " viewport " content = " width = device - width , initial - scale = 1.0 " >
        <title > Gaming Website </title >
        <link rel = " stylesheet " href = "more.css" >
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        
        <!--favicon icon-->
        <link rel="Shortcut Icon" type="image/png" href="favicon2.png">
        

    </head >
    <header >
		<a href="index.php" class="logo">Helheim Gaming</a>
		<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php">Games</a></li>
            <li><a href="index.php">Contact</a></li>
			<li><a href="AdminLogin.php">Admin</a></li>
		</ul>
	</header>
    <body>
    <div class="cardBx">
      <?php
       $con = new mysqli('localhost','root','','game');
       $sql = "select * from `inserted_games` order by rand()";
       $result = mysqli_query($con,$sql);
       while($row = mysqli_fetch_assoc($result))
       {
        $name = $row['GameName'];
        $type = $row['GameType'];
        $size = $row['Size'];
        $img = $row['img'];
        ?>
       
                <div class="card" data-item="pc">
                <img src="<?php echo "./assets/$img"; ?>">
                        <div class="content">
                        <h4><?php echo $name; ?></h4>
                        <div class="progress-line"><span></span></div> 
                        <div class="info">
                            <p><?php echo $type; ?><br>
                               Size: <?php echo $size; ?>GB<br></p>
                            <a href="./assets/price1.php?Game=<?php echo $name; ?>">Download</a>
                        </div>
                    </div>
                </div>
       <?php
       }
      ?> 
    </div>
            <!--footer-->
            <footer>
            <div class="info">
                <a href="#"class="logo">Helheim Gaming</a>
                <p><i class='bx bxs-copyright'></i>2022 All Rights Reserved</p>
                <ul>
                    <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
                </ul>
            </div>
        </footer>
</body>
</html>
