<?php

if(isset($_POST['Delete_game']))
{
    $con = new mysqli('localhost','root','','game');
    $name = $_POST['GameName'];
  
   
    $sql="DELETE FROM `inserted_games` WHERE GameName = '$name'";
 

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "<script>alert('Product deleted successfully')</script>";
    }
    else
    {
        echo "<script>alert('Product could not be deleted')</script>";
    }
}

?>


<!-- <link rel="stylesheet"  href="style.css"> -->
<h3 class="text-center p-4">Delete Game</h3>

<form action="" method="post" class="mb-2" enctype="multipart/form-data">
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="GameName" class="form-label">GameName</label>
        <input type="text" name="GameName" placeholder="Enter Game name" id="GameName" class="form-control" required>
    </div>
    <div class="form-outline text-center container mb-4 w-50">
        <input type="submit" class="delete" name="Delete_game" value="DELETE">
    </div>
</form>