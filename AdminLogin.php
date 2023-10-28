<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdminLogin.css">
    <link rel="Shortcut Icon" type="image/png" href="favicon2.png">
    <title>Admin Page</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="AdminLogin.php" method="post">
                    <h2>Admin Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" required name="username" >
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required name="password" >
                        <label for="">Password</label>
                    </div>                
                   <!-- <div class="forget">
                        <label for=""><input type="checkbox" name="" id="">Remember Me <a href="#">Forget Password</a></label>
                       
                    </div>-->
                    <Button>Log In</Button> 
                    <!--<div class="register">
                        <p>Don't have an account<a href="#">Register</a></p>
                    </div>-->
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "game";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM `admin` WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if the user's credentials are valid
    if ($user) {
        // The user is logged in
        header("Location: admin_area/index.php");
    } else {
        // The user's credentials are invalid
        echo "<script>alert('Invalid Username or password')</script>";
    }
}
?>
</body>
</html>