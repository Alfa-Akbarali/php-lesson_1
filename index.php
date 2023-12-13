<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";
// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);

$users = "SELECT * FROM users";
$users = mysqli_query($conn, $users);

$products = "SELECT * FROM products";
$products = mysqli_query($conn, $products); 
// Check connection
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
echo "succely working"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web_page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <td scope="col">#</td>
            <td scope="col">User Name</td>
            <td scope="col">Phone Number</td>
        </tr>
    </thead>
    <tbody>
       <?php
       while($row = mysqli_fetch_array($users))
       {
        ?>
       <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['phone_number'];?></td>
            <td><?php echo $row['email'];?></td>
       </tr>
       <?php } ?>
      
    </tbody>
    <!-- //table2 -->

    <1table classt="table">
    <br><br>
    <thead>
        <tr>
            <td scope="col">#</td>
            <td scope="col">product</td>
            <td scope="col">Product price</td>
        </tr>
    </thead>
        <tbody>
            
       <?php
       while($row = mysqli_fetch_array($products))
       {
        ?>
       <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['price'];?></td>
       </tr>
       <?php } ?>
        </tbody>

    </table>
</table>

    <!-- <div class="text-center">
        <div class="row">
            <div id="header" class="col-12">
                <h3>Header</h3>
            </div>
            <div id="main" class="col-6">
                <h3>Main</h3>
            </div>
            <div id="empty" class="empty col-3">
                <h3>Empty</h3>
            </div>
            <div id="sidebar" class="col-3">
                <h3>Sidebar</h3>
            </div>
            <div id="footer" class="col-12">
                <h3>Footer</h3>
            </div>
        </div>
    </div> -->
</body>
</html>