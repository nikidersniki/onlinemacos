<?php      
    $host = "localhost";  
    $user = "debian-sys-maint";  
    $password = 'iRyG9PR1mA0Sl9lj';  
    $db_name = "mac";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
        $mysql = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
    } catch (PDOException $e){
        echo "SQL Error: ".$e->getMessage();
    }
?>  