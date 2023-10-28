<?php

if(isset($_POST['insert_product']))
{
    $con = new mysqli('localhost','root','','game');
    $name = $_POST['GameName'];
    $type = $_POST['GameType'];
    $price = $_POST['Price'];
    $size = $_POST['Size'];


    $img = $_FILES['img']['name']; 
    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $img3 = $_FILES['img3']['name'];
    $img4 = $_FILES['img4']['name'];
   
    $sql="insert into `inserted_games`(GameName,GameType,Price,img,Size,img1,img2,img3,img4) values ('$name','$type','$price','$img','$size','$img1','$img2','$img3','$img4')"; 

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "<script>alert('Product inserted successfully')</script>";
    }
    else
    {
        echo "<script>alert('Product could not be inserted')</script>";
    }
}

?>



<h3 class="text-center p-4">Insert Game</h3>

<form action="" method="post" class="mb-2" enctype="multipart/form-data">
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="GameName" class="form-label">GameName</label>
        <input type="text" name="GameName" placeholder="Enter Game name" id="GameName" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="GameType" class="form-label">GameType</label>
        <input type="text" name="GameType" placeholder="Enter Game Type" id="product_name" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="Price" class="form-label">Price</label>
        <input type="text" name="Price" placeholder="Enter Price" id="Price" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="img" class="form-label">Main image</label>
        <input type="file" name="img" id="img" class="form-control" required>
    </div>
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="Size" class="form-label">Size</label>
        <input type="text" name="Size" placeholder="Enter Size" id="Price" class="form-control" required>
    </div>
    
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="img1" class="form-label">image 1</label>
        <input type="file" name="img1" id="img1" class="form-control" required>
    </div> -->
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="img2" class="form-label">image 2</label>
        <input type="file" name="img2" id="img2" class="form-control" required>
    </div>
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="img3" class="form-label">image 3</label>
        <input type="file" name="img3" id="img3" class="form-control" required>
    </div>
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="img4" class="form-label">image 4</label>
        <input type="file" name="img4" id="img4" class="form-control" required>
    </div>


    <div class="form-outline text-center container mb-4 w-50">
        <input type="submit" class="insert" name="insert_product" value="INSERT">
    </div>
</form>
