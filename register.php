<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account erstellen</title>
    <style>
   @font-face {
    font-family: apple;
    src: url(fonts/SFPRODISPLAYMEDIUM.OTF);
}
        body{   
        background: url(apps/background/2_low.jpg); 
        background-repeat: no-repeat;
        background-size: cover;
    }  
    #frm{  
        border: solid transparent 1px; 
        border-radius:15px; 
        width:25%;          
        margin: 120px auto; 
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.182);
        box-shadow:0px 0px 6px black;
        padding: 50px;  
        font-family: apple; 
        font-size: 20px; 
    }  
    #btn{  
        box-shadow:0px 0px 6px black;
        color: #fff;  
        border-radius:15px; 
        background-color: rgba(255, 255, 255, 0.182);
        padding-left:70px;
        padding-right:70px;
        border: solid transparent 1px; 
        color:black;
        font-weight: 500;
        font-size:25px;
    }  
    #btn:hover{  
        background-color: rgba(255, 255, 255, 0.382);
        color:white;
    }
    #user, #pass{
        border-radius:10px;
        border: solid transparent 1px; 
        border: 0px solid;
        height: 25px;
        width: 160px;
        color: #CCC;
        background-color: rgba(255, 255, 255, 0.282);
        outline: none;
    }
    a{
    color:black;
}
</style>


    </style>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("connection.php");
      $stmt = $mysql->prepare("SELECT * FROM users WHERE NAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 0){
        //Username ist frei
        if($_POST["pw"] == $_POST["pw2"]){
          //User anlegen
          $stmt = $mysql->prepare("INSERT INTO users (NAME, PWD) VALUES (:user, :pw)");
          $stmt->bindParam(":user", $_POST["username"]);
          $hash = $_POST["pw"];
          $stmt->bindParam(":pw", $hash);
          $stmt->execute();
          echo "Dein Account wurde angelegt";
          header('Location: index.php'); 
        } else {
          echo "<script>window.alert('The Passwords dont match.')</script>";
        }
      } else {
          echo "<script>window.alert('The user alreddy exists.')</script>";
      }
    }
     ?>
     <div id="frm">
     <center><h1>MACOS-ONLINE</h1></center>
     <center><h2>SIGN UP</h2></center>
    <form action="register.php" method="post">
      <center><label> Username: </label><input id="user" type="text" name="username" required></center>
      <p>
      <center><label> Password:  ‎‎‎</label><input id="pass" type="password" name="pw"  required></center>
      <p>
      <center><label> Password:  ‎‎‎</label><input id="pass" type="password" name="pw2"  required></center>
      <p>
      <center><td colspan="2"><input id="btn" type="submit" name="submit" value="Create Account"></center>
    </form>
    <p>
    <center><a href="index.php">Login</a></center>
  </div>
 </body>
</html>
