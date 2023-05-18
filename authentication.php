<?php        
     include('connection.php');  
     $NAME = $_POST['user'];  
     $PWD = $_POST['pass']; 
         $sql = "select *from users where NAME = '$NAME' and PWD = '$PWD'";  
         $result = mysqli_query($con, $sql);   
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        session_start();
        $_SESSION["NAME"] = $NAME;
            $data = "SELECT ID, NAME, BG FROM users";
            $result = $con->query($data);
            if ($result->num_rows > 0) { 
                $_SESSION["BG"] = $row["BG"];
                $_SESSION["UNAME"] = $row["NAME"];
            }
        ?>
        <?php
        if($count == 1){  
            header('Location: desktop.php'); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
        ?>