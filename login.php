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

    $query = "SELECT * FROM `registration` WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if the user's credentials are valid
    if ($user) {
        // The user is logged in
        header("Location: index.php");
    } else {
        // The user's credentials are invalid
        echo "<script>alert('Invalid Username or password')</script>";
    }
}
?>
