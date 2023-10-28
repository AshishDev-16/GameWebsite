<!DOCTYPE html>
<html>
<head >
        <meta charset = " UTF - 8 " >
        <meta name = " viewport " content = " width = device - width , initial - scale = 1.0 " >
        <title > Gaming Website </title >
        <link rel = " stylesheet " href = "price.css" >
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        
        <!--favicon icon-->
        <link rel="Shortcut Icon" type="image/png" href="favicon2.png">
        

    </head >
    <header >
		<a href="index.php" class="logo">Helheim Gaming</a>
		<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="#games">Games</a></li>
            <li><a href="#contact">Contact</a></li>
			<li><a href="AdminLogin.php">Admin</a></li>
		</ul>
	</header>
<body>
<!-- Price Page -->
<div class="info">
  <h2 id="GameName">    </h2>
  <h3 id="GameType"></h3>
  <h3 id="Price"></h3>
  <img id="img" src="<?php echo "$img"; ?>" alt="">

  <form id="payment-form" action="../404.html">
    <label for="payment-method">Select Payment Method:</label>
    <select name="payment-method" id="payment-method">
      <option value="credit-card">Credit Card</option>
      <option value="paypal">PayPal</option>
      <option value="paypal">Google Pay</option>
    </select>
    <input type="button" onclick="location.href='magnet:?xt=urn:btih:BA3C835923F7B90F6EE3A266207F0D394F47FF73&amp;dn=High+On+Life+%28%2B+Windows+7+Fix%2C+MULTI5%29+%5BFitGirl+Repack%2C+Selective+Download+-+from+29.8+GB%5D&amp;tr=udp%3A%2F%2Fopentor.net%3A6969&amp;tr=udp%3A%2F%2Fopentor.org%3A2710&amp;tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&amp;tr=http%3A%2F%2Ftracker.dler.org%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Fipv4.tracker.harry.lu%3A80%2Fannounce&amp;tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&amp;tr=udp%3A%2F%2Fretracker.lanta-net.ru%3A2710%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.cyberia.is%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.moeking.me%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.tiny-vps.com%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&amp;tr=udp%3A%2F%2Fexodus.desync.com%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce&amp;tr=http%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&amp;tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Fcoppersurfer.tk%3A6969%2Fannounce&amp;tr=udp%3A%2F%2Ftracker.zer0day.to%3A1337%2Fannounce';" style="  background-color: #00c853;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;" value="Buy Now">
  </form>
<p>Screenshots</p>
  <div class="SS">
    <div class="imgs">
      <img id="img1" src="<?php echo "$img1"; ?>" alt="">
      <img id="img2" src="<?php echo "$img2"; ?>" alt="">
      <img id="img3" src="<?php echo "$img3"; ?>" alt="">
      <img id="img4" src="<?php echo "$img4"; ?>" alt="">
    </div>
  </div>
</div>
<?php
// Connect to the database and fetch game information
$GameName = $_GET['Game'];

// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT GameName, GameType, Price , img, img1, img2, img3, img4 FROM inserted_games WHERE GameName = '$GameName'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $GameName = $row["GameName"];
    $GameType = $row["GameType"];
    $Price = $row["Price"];
    $img = $row['img'];
    $img1 = $row['img1'];
    $img2 = $row['img2'];
    $img3 = $row['img3'];
    $img4 = $row['img4'];
  }
} else {
  echo "Game not found";
}

$conn->close();
?>

<!-- Set the fetched game information to JavaScript variables -->
<script>
  var GameName = "<?php echo $GameName; ?>";
  var GameType = "<?php echo $GameType; ?>";
  var Price = "<?php echo $Price; ?>";
  var img = "<?php echo $img; ?>";
  var img1 = "<?php echo $img1; ?>";
  var img2 = "<?php echo $img2; ?>";
  var img3 = "<?php echo $img3; ?>";
  var img4 = "<?php echo $img4; ?>";
</script>

<!-- Set the fetched game information to the price page -->
<script>
  document.getElementById("GameName").innerHTML = GameName;
  document.getElementById("GameType").innerHTML = "Type: " + GameType;
  document.getElementById("Price").innerHTML = "Price: RS:" + Price;
  document.getElementById("img").src = img;
  document.getElementById("img1").src = img1;
  document.getElementById("img2").src = img2;
  document.getElementById("img3").src = img3;
  document.getElementById("img4").src = img4;
</script>

<style>

.info{  
    text-align: center;
    max-width: 100%;
    transition: .5s all;
    background-size: contain;
    font-family: "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Roboto", "Oxygen",
    "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue","sans-serif";
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;


}
::-webkit-scrollbar{
  width: 12px;
}
::-webkit-scrollbar-thumb
{
    background: #fff;
    border-radius: 6px;
}

 #img {
    width: 20%;
    height: 20%;
}

/* Game name styles */
#GameName {
  color: #fff;
  font-size: 24px;
  margin-top: 20px;
  margin-bottom: 10px;
}

/* Game type styles */
#GameType {
  margin-top: 0;
  margin-bottom: 20px;
  font-style: italic;
  color: #fff;
}

/* Price styles */
#Price {
  font-size: 36px;
  margin-top: 0;
  margin-bottom: 30px;
  color: #00c853;
}

/* Payment form styles */
#payment-form {
  margin-bottom: 20px;
}

#payment-form label {
    color: whitesmoke;
    display: block;
    margin-bottom: 10px;
}

#payment-method {
  color: whitesmoke;
  margin-bottom: 10px;
}

/* #payment-form button[type="submit"] {
  background-color: #00c853;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
} */

#payment-form button[type="submit"]:hover {
  background-color: #007f33;
}

.imgs{
  margin-top: 8%;
  margin-left: 2%;

}
.details{
  position: absolute;
  margin-left:10px ;
}
.info p{
  position: absolute;
  margin-top: 5%;
  margin-left: 2%;
  color: whitesmoke;
  font-size: 3.1vmin;
  font-weight: 500;
}
.imgs img{
    float:left;
    width: 34%;
    padding: 5px;
}




</style>
        <!--footer-->
        <footer>
            <div class="info">
                <a href="#"class="logo">Helheim Gaming</a>
                <h4><i class='bx bxs-copyright'></i>2022 All Rights Reserved</h4>
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
