<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
  <style>
    @font-face {
    font-family: apple;
    src: url(../../fonts/SFPRODISPLAYMEDIUM.OTF);
  }
    html{
      padding:0px;
      margin:0px;
      font-family:apple;
      background-color:lightgrey;
      padding-bottom:65px;
    }
        form{
          display:flex;
          justify-content:center;
          flex-wrap: wrap;
          font-family:apple;
          color:rgb(53, 53, 53);
          font-size:17px;
          padding-bottom:20px;
        }
        #pics{
          box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.596);
          background-color: rgba(255, 255, 255, 0.548);
          backdrop-filter: blur(10px);
          margin:5px;
          border-radius:8px;
          padding:2px;
        }
        button{
          border:none;
          font-family:apple;
          width:290px;
          padding:0px;
        }
        #reload{
          box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.596);
          background-color: rgba(255, 255, 255, 0.548);
          backdrop-filter: blur(7px);
          padding-top:20px;
          padding-bottom:20px;
          border-radius:10px;
          background:rgba(255, 255, 255, 0.486);
          color:rgb(53, 53, 53);
          width:60%;
          position:fixed;
          margin-left:20%;
          text-align:center;
          font-weight:600;
          bottom:10px;
          font-size:20px;
        }
  </style>
<?php
session_start();
include('../../connection.php');  
$NAME = $_SESSION["UNAME"];
echo "<br>";
$sql = "SELECT ID, NAME, URL, low FROM backgrounds";
$result = $con->query($sql);
echo "<form method='post'>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div id='pics'><button type='submit' name='" . $row["ID"] . "' onclick=''>" . $row["NAME"] . "<br><img src='" . $row["low"]. "' height='150px'></button><br><br></div>";
  }
  if(isset($_POST['1'])) {
    $val = "1_low.jpg";
    $_SESSION["BG"] = $val;
      $mysqli = new mysqli("localhost", "debian-sys-maint", "iRyG9PR1mA0Sl9lj", "mac");

      if($mysqli === false){
        die("ERROR: Could not connect. "
            . $mysqli->connect_error);
      }

      $sql2 = "UPDATE users SET BG='1.jpg' WHERE NAME='$NAME'";
      if($mysqli->query($sql2) === true){
        
      } else{
        echo "ERROR: Could not able to execute $sql. "
                          . $mysqli->error;
      }
      $mysqli->close();
  }
    if(isset($_POST['2'])) {
        $value2 = "2_low.jpg";
        $_SESSION["BG"] = $value2;
        $mysqli = new mysqli("localhost", "debian-sys-maint", "iRyG9PR1mA0Sl9lj", "mac");

      if($mysqli === false){
        die("ERROR: Could not connect. "
            . $mysqli->connect_error);
      }

      $sql3 = "UPDATE users SET BG='2.jpg' WHERE NAME='$NAME'";
      if($mysqli->query($sql3) === true){
       
      } else{
        echo "ERROR: Could not able to execute $sql. "
                          . $mysqli->error;
      }
      $mysqli->close();
    }
    if (isset($_POST['3'])) {
        $value = "3_low.jpg";
         $_SESSION["BG"] = $value;
        $mysqli = new mysqli("localhost", "debian-sys-maint", "iRyG9PR1mA0Sl9lj", "mac");

      if($mysqli === false){
        die("ERROR: Could not connect. "
            . $mysqli->connect_error);
      }

      $sql = "UPDATE users SET BG='3.jpg' WHERE NAME='$NAME'";
      if($mysqli->query($sql) === true){
        
      } else{
        echo "ERROR: Could not able to execute $sql. "
                          . $mysqli->error;
      }
      $mysqli->close();
    }
    if (isset($_POST['4'])) {
          $value = "4_low.png";
           $_SESSION["BG"] = $value;
          $mysqli = new mysqli("localhost", "debian-sys-maint", "iRyG9PR1mA0Sl9lj", "mac");
  
        if($mysqli === false){
          die("ERROR: Could not connect. "
              . $mysqli->connect_error);
        }
  
        $sql = "UPDATE users SET BG='4.png' WHERE NAME='$NAME'";
        if($mysqli->query($sql) === true){
          
        } else{
          echo "ERROR: Could not able to execute $sql. "
                            . $mysqli->error;
        }
        $mysqli->close();
      }
      if (isset($_POST['5'])) {
        $value = "5_low.png";
         $_SESSION["BG"] = $value;
        $mysqli = new mysqli("localhost", "debian-sys-maint", "iRyG9PR1mA0Sl9lj", "mac");

      if($mysqli === false){
        die("ERROR: Could not connect. "
            . $mysqli->connect_error);
      }

      $sql = "UPDATE users SET BG='5.png' WHERE NAME='$NAME'";
      if($mysqli->query($sql) === true){
        
      } else{
        echo "ERROR: Could not able to execute $sql. "
                          . $mysqli->error;
      }
      $mysqli->close();
    }
    if (isset($_POST['6'])) {
      $value = "6_low.png";
       $_SESSION["BG"] = $value;
      $mysqli = new mysqli("localhost", "debian-sys-maint", "iRyG9PR1mA0Sl9lj", "mac");

    if($mysqli === false){
      die("ERROR: Could not connect. "
          . $mysqli->connect_error);
    }

    $sql = "UPDATE users SET BG='6.png' WHERE NAME='$NAME'";
    if($mysqli->query($sql) === true){
      
    } else{
      echo "ERROR: Could not able to execute $sql. "
                        . $mysqli->error;
    }
    $mysqli->close();
  }
  if (isset($_POST['7'])) {
    $value = "7_low.jpg";
     $_SESSION["BG"] = $value;
    $mysqli = new mysqli("localhost", "debian-sys-maint", "iRyG9PR1mA0Sl9lj", "mac");

  if($mysqli === false){
    die("ERROR: Could not connect. "
        . $mysqli->connect_error);
  }

  $sql = "UPDATE users SET BG='7.jpg' WHERE NAME='$NAME'";
  if($mysqli->query($sql) === true){
    
  } else{
    echo "ERROR: Could not able to execute $sql. "
                      . $mysqli->error;
  }
  $mysqli->close();
}
if (isset($_POST['8'])) {
  $value = "8_low.jpg";
   $_SESSION["BG"] = $value;
  $mysqli = new mysqli("localhost", "debian-sys-maint", "iRyG9PR1mA0Sl9lj", "mac");

if($mysqli === false){
  die("ERROR: Could not connect. "
      . $mysqli->connect_error);
}

$sql = "UPDATE users SET BG='8.jpg' WHERE NAME='$NAME'";
if($mysqli->query($sql) === true){
  
} else{
  echo "ERROR: Could not able to execute $sql. "
                    . $mysqli->error;
}
$mysqli->close();
}
    } else {
  echo "0 results";
    }
$con->close();
echo "</form>";
?>
<center><p>Tip! The full quality Background is only active after logging back in.</p></center>
<script>function reload(){
window.top.location.reload();
}
</script>
<div id="reload" onclick="reload()">Reload</div>
</body>
</html>