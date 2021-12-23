<?php
include "header.php";
?>


<table>
    <th>id</th>
    <th>patient name</th>
    <th>email</th>
    <th>date</th>


    <?php

    $host="localhost";
    $user="root";
    $password="";
    $dbName="hospital";

    $conn= mysqli_connect($host,$user,$password,$dbName);

    $query="SELECT*FROM patients";
    $result=mysqli_query($conn,$query);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>". $row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['date']."</td></tr>";
        }
       
    }else{
        echo "erorr";
    }

    ?>
    </table>


