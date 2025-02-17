<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Good Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-5 cheat-center">
        &nbsp;<br>
        <img src="images/ftcard.jpg" width="450" style="margin-left:200px;
       border-radius: 20px; margin-top: 20px; " />
        </div>
        <div class="col-1"></div>
        <div class="col-5">      
             <div class="container">
        <div class="header">
            <h1 style="color:#28a745">Order Form</h1>
            <div class="header-buttons">
               
                <a href="food.php" id="addButton2" class="cool2">< Back </a>
                
            </div>
        </div>


        <?php
    error_reporting(1);
    include('connection.php');
    if(isset($_POST['sub'])) {
        $product_name = $_POST['pname'];
        $phone = $_POST['phone'];  
        $name = $_POST['name'];
        $product_price = $_POST['price'];
        $address = $_POST['add'];

        $query = "INSERT INTO `order` (Name, Phone, Address, P_name, Price) VALUES ('$name', '$phone', '$address', '$product_name', '$product_price')";
        if ($con->query($query) === TRUE) {
            echo "<script>window.location.href = 'ordersuccess.php'</script>";  
        } else {
            echo "Error: " . $query . "<br>" . $con->error;
        }
    }
?>
        <!-- Add Food Form -->
        <div id="addFoodForm">
            <form method="POST" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="name">Product Name:</label>
                <input type="text" id="name" name="pname"
                value="<?php echo $_GET['name'] ?>" readonly
                required><br>

                <label for="price">Price:</label>
                <input type="text" id="price" name="price"
                value="<?php echo $_GET['price'] ?>"  readonly
                required><br>

                <label for="mail">Phone:</label>
                <input type="text" name="phone" required><br>

                <label for="add">Address:</label>
                <textarea id="description" name="add" required></textarea><br>
                
                <button type="submit" name="sub">Submit</button>
            </form>
        </div>
    </div></div>
        <div class="col-1"></div>
    </div>
   

</body>
</html>

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: white; /* Dark blue background */
    color: #E5E5E5; /* Light grey text */
    overflow-x: hidden;
}

.cheat-center{
 
    display: flex; /* Using Flexbox for alignment */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
 
}
.cool2 {
    display: inline-block;
    background-color: maroon;
    color: white; /* White text */
    text-decoration: none; /* Remove underline */
    padding: 10px 20px; /* Padding around text */
    border-radius: 5px; /* Rounded corners */
    font-size: 16px; /* Font size */
    font-weight: bold; /* Make text bold */
}

.cool2:hover {
    background-color: red; /* Darker green on hover */
    color:white !important;
}


.container {
    width: 80%;
    margin: 40px auto;
    padding: 20px;
    background: skyblue; /* Darker blue background */
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    border-radius: 20px;
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.header-buttons button {
    background-color: #0F3460; /* Dark blue */
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

form {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    color: white;
  
}

label {
    display: block;
    margin-bottom: 5px;
    color :black;
}

input[type="text"],
textarea,
input[type="file"] {
    width: 100%;
    padding: 10px;
    background: white; /* Dark blue */
    border: 1px solid #4E9F3D; /* Greenish border */
    color: black; /* White text */
    border-radius: 5px;
}

button[type="submit"] {
    background-color: #28a745;; /* Green */
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

button[type="submit"]:hover {
    background-color: green; /* Lighter green */
}

</style>