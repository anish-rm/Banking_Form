<?php

    include 'connect.php';

    if(isset($_POST['update'])) {

        $name = $_POST['name'];
        $number = $_POST['number'];
        $mail = $_POST['mail'];
        $city = $_POST['city'];
        $code = $_POST['code'];
        $eid = $_POST['eid'];


        $result = mysqli_query($conn,"UPDATE bank_details SET name='$name', mobile='$number', email='$mail', city='$city', code='$code' WHERE ID ='$eid'");

        if($result){
            echo '<script>alert("Data Updated Successfully");</script>';
        }
        else{
            echo "Data  not Inserted Successfully";   
        }

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        
    .login{
        border-radius: 15px;
        margin : 20px 0;
        margin-left: 50px;
        background:#fff;
        padding: 50px;
        width: 35%;
    }
    .mail input[type = "email"],.name input[type = "text"],.number input[type = "number"],.city input[type = "text"],.code input[type = "number"]{
    width: 80%;
    background: #eff0f3;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    margin-bottom: 5px;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="login">
            <?php
                $eid = $_GET['id'];
                $sql1 = "SELECT * FROM bank_details where ID = '$eid' ";
                $result1 = mysqli_query($conn,$sql1);
                $row = mysqli_fetch_array($result1);
            ?>
                <form action="edit.php" class="myform" method="POST">
                    <input type="hidden" name="eid" value="<php echo $row['ID']; ?>" >
                    <div class="name">
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" >
                    </div>
                    <div class="number">
                        <input type="number" name="number" value="<?php echo $row['mobile']; ?>">
                    </div>
                    <div class="mail">
                        <input type="email" name="mail" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="city">
                        <input type="text" name="city" value="<?php echo $row['city']; ?>">
                    </div>
                    <div class="code">
                        <input type="number" name="code"  value="<?php echo $row['code']; ?>">
                    </div>
                    <input type="submit" value="Update" name="update" class="btn">
                </form>
            </div>
    </div>
</body>
</html>