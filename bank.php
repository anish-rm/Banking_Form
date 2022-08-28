<!-- 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
         .tab{
                margin-top: 40px;
            }

            .table{
                 border: #eff0f3 solid 1px; 
            }

            .thead1{
                background: #0d0d0d;
                color: #fffffe;
                padding: 20px;
            }

            /*.thead2{
                padding: 20px;
            }*/

            .tbod{
                background: #fffffe;
            }

            .btnt{
                padding: 5px 30px;
                background: #ff8e3c;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                text-decoration: none;
                color: #33272a;
            }

            .tabhe{
                text-align: center;
                font-size: 45px;
                font-weight: 700;
                color: #33272a;
            }
            .hide{
                display: none;
            }
            button{
                display:block;
                margin:30px auto;
                background:crimson;
                color:white;
                border:0;
                padding: 6px 10px;
                cursor: pointer;
            }

            .popup-wrapper{
                background: rgba(0, 0, 0, 0.5);
                position:fixed;
                top:0;
                left:0;
                width:100%;
                height:100%;
                padding: 50px;
                /* display: none; */
                /*display: none;*/
            }

            .popup{
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
                width: 100%;
                max-width: 300px;
                margin: 10% auto;
                padding: 20px;
                background: white;
                position: relative;
            }

            .popup a{
                background: crimson;
                color: white;
                text-decoration: none;
                padding: 6px 10px;
            }

            .close{
                position: absolute;
                top :5px;
                right: 8px;
                cursor: pointer;
                
            }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="popup-wrapper">
        <div class="popup">
            <div class="close">x</div>
            <div class="content">
                <h2>AA SALE!!!!</h2>
                <p>50% off on all clothings arrive soon!! dont miss out!!!</p>
                <a href="#">View Store</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="holder">
            <div class="content">
                <div class="header2">
                    <h1>Deposit</h1>
                </div>
                <p>Double the Prosperity with Anish's Double Delight. Anish Bank Double Delight is an exclusive product for depositors to invest the amount in odd sums and get the round sums of maturity with Free Hospital insurance coverage . Double Delight term deposit repayable along with accrued interest after an agreed fixed period of time.</p>
                <input type="button" value="Enter Details" class="btn">
            </div>
            <div class="login">
                <form action="bank.php" class="myform" method="POST">
                    <div class="name">
                        <input type="text" name="name" id="" placeholder="Name" required>
                    </div>
                    <div class="number">
                        <input type="number" name="number" id="" placeholder="Mobile Number" required>
                    </div>
                    <div class="mail">
                        <input type="email" name="mail" id="" placeholder="E-mail" required>
                    </div>
                    <div class="city">
                        <input type="text" name="city" id="" placeholder="City" required>
                    </div>
                    <div class="code">
                        <input type="number" name="code" id="" placeholder="Pincode" required>
                    </div>
                    <input type="submit" value="Enter" class="btn" name="submit">
                </form>
            </div>
        </div>
        
    </div>
     <h1 class="tabhe">DETAILS</h1>
    <div class="container tab" id="tab1">
       
        <table class="table table-bordered">
            <thead class="thead1">
              <tr class="thead2">
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">NUMBER</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CITY</th>
                <th scope="col">CODE</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="tbod">
            
              <tr>
                

                <td><input type="button" value="Edit" class="btnt"></td>
                <td><input type="button" value="Delete" class="btnt"></td>
              </tr>
            </tbody>
          </table>
    </div>

</div>

</body>
</html> -->

<?php

    include 'connect.php';

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $number = $_POST['number'];
        $mail = $_POST['mail'];
        $city = $_POST['city'];
        $code = $_POST['code'];

        $sql = "INSERT INTO bank_details (name,mobile,email,city,code) VALUES('$name','$number','$mail','$city','$code')";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo '<script>alert("Data Inserted Successfully");</script>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    

    <div class="container">
        <div class="holder">
            <div class="content">
                <div class="header2">
                    <h1>Deposit</h1>
                </div>
                <p>Double the Prosperity with Anish's Double Delight. Anish Bank Double Delight is an exclusive product for depositors to invest the amount in odd sums and get the round sums of maturity with Free Hospital insurance coverage . Double Delight term deposit repayable along with accrued interest after an agreed fixed period of time.</p>
                <input type="button" value="Enter Details" class="btn">
            </div>
            <div class="login">
                <form action="" class="myform">
                    <div class="name">
                        <input type="text" name="" id="" placeholder="Name" >
                    </div>
                    <div class="number">
                        <input type="number" name="" id="" placeholder="Mobile Number">
                    </div>
                    <div class="mail">
                        <input type="email" name="" id="" placeholder="E-mail">
                    </div>
                    <div class="city">
                        <input type="text" name="" id="" placeholder="City">
                    </div>
                    <div class="code">
                        <input type="number" name="" id="" placeholder="Pincode">
                    </div>
                    <div class="forget">
                        <a href="http://">Forget your password?</a>
                    </div>
                    <input type="submit" value="Log In" class="btn">
                </form>
            </div>
        </div>
        
    
    </div>
</div>
<h1 class="tabhe">DETAILS</h1>
    <div class="container tab" id="tab1">
        <?php
            $sql1 = "SELECT * FROM bank_details";
            $result1 = mysqli_query($conn,$sql1);
         ?>

        <table class="table table-bordered">
            <thead class="thead1">
              <tr class="thead2">
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">NUMBER</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CITY</th>
                <th scope="col">CODE</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="tbod">
                <?php  
                while($row=mysqli_fetch_array($result1)){
                    $id = $row['ID'];
                ?>

              <tr>
                <th scope="row"><?php echo $row['ID']; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['code']; ?></td>


                <td> <a class="btnt" href="edit.php?id=<?php echo $row['ID']; ?>">Edit</a></td>
                <!-- Whenever we are passing from php to html we have to print it -->
                <td><input type="button" value="Delete" class="btnt"></td>
              </tr>
              <?php
                }
            ?>
            </tbody>
          </table>
    </div>
    <div class="popup-wrapper?id=<?php echo $row['ID'];?>">
        <div class="popup">
            <div class="close">x</div>
            <div class="login">
                <form action="" class="myform">
                    <div class="name">
                        <input type="text" name="" id="" value="<?php echo row['name'] ?>" >
                    </div>
                    <div class="number">
                        <input type="number" name="" id="" placeholder="Mobile Number">
                    </div>
                    <div class="mail">
                        <input type="email" name="" id="" placeholder="E-mail">
                    </div>
                    <div class="city">
                        <input type="text" name="" id="" placeholder="City">
                    </div>
                    <div class="code">
                        <input type="number" name="" id="" placeholder="Pincode">
                    </div>
                    <input type="submit" value="Update" class="btn">
                </form>
            </div>
        </div>
    </div>


    <!-- <script src="script.js"></script> -->
</body>
</html>