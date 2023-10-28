<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
    <title>Document</title>
</head>
<body>
<div class="container my-4">
<h3>Registered Customers</h3>

<table class="table">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Mail</th>
      <th scope="col">username </th>
      <th scope="col">paasword </th>
      <th scope="col">Time</th>
    </tr>
  </thead>
</tbody>
    <?php
    $con=mysqli_connect('localhost','root','','game');
        $sql="SELECT *From `Registration`";
        $result=mysqli_query($con,$sql);
        $noresult=true;
            while($row =mysqli_fetch_assoc($result)){
                $noresult=false;
                $id=$row['id'];
                $fullname=$row['Fullname'];
                $mail=$row['mail'];
                $username=$row['username'];
                $password=$row['password'];
                $Time=$row['Time'];
                
                echo "<tr> 
                    <td>" . $id . "</td>
                    <td>" . $fullname ."</td>
                    <td>" . $mail . "</td>
                    <td>" . $username . "</td>
                    <td>" . $password . "<td>
                    <td>" . $Time ."</td>
                    </tr>";
                
            }
        
    ?>
  </tbody>
</table>
</div>





<div class="container my-4">
<h3>Contact</h3>


<table class="table">

  <thead>
    <tr>
      <th scope="col">fullname</th>
      <th scope="col">Mail</th>
      <th scope="col">message</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
</tbody>
    <?php
    $con=mysqli_connect('localhost','root','','game');
        $sql="SELECT *From `contact`";
        $result=mysqli_query($con,$sql);
        $noresult=true;
            while($row =mysqli_fetch_assoc($result)){
                $noresult=false;
                $fullname=$row['fullname'];
                $mail=$row['mail'];
                $message=$row['message'];
                $Time=$row['Time'];
                
                echo "<tr> 
                    
                    <td>" . $fullname ."</td>
                    <td>" .$mail . "</td>
                    <td>" . $message . "<td>
                    <td>". $Time ."</td>
                    </tr>";
                
            }
        
    ?>
  </tbody>
</table>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=poppins&display=swap');
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    color: #fff;
    scroll-behavior: smooth;
}

body{
    background-image: url('background1.jpg');
    background-size: cover;
}

::-webkit-scrollbar{
    width: 12px;
}
::-webkit-scrollbar-thumb
{
    background: #fff;
    border-radius: 6px;
}


</style>
</body>
</html>