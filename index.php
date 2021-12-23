<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stayle.css">
</head>
<body>
    <div class="admin">
        <div class="logo">
            <img src="images/logo.png" alt="" class="img">
            <h2>hospital</h2>
        </div> 
            <div class="book">
                <p>welcom to with you in hospital</p>
                <form action="index.php" method="POST">
                    <input type="text" placeholder= "enter name" name="name">
                    <input type="text" placeholder= "enter email" name="email">
                    <input type="date"  name="date">
                    <input type="submit" value="book now" name="send">
                </form>

                <?php
                $host="localhost";
                $user="root";
                $password="";
                $dbName="hospital";

                $conn= mysqli_connect($host,$user,$password,$dbName);
              
                 $pName   =$_POST["name"];
                 $pEmail  =$_POST['email'];
                 $pDate   =$_POST['date'];
                 $pSend   =$_POST['send'];

                 if($pSend){
                 $query="INSERT INTO patients(name,email,date)VALUE('$pName','$pEmail','$pDate')";
                 $result=mysqli_query($conn,$query);
                 echo "done";
                 }else{
                     echo "error";
                 }


                ?>


            
            </div>
    </div>
</body>
</html>