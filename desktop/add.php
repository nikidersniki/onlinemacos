<?php
    session_start();
    $update = $_GET['update'];
    $servername = "localhost";
    $username = "debian-sys-maint";
    $password = "iRyG9PR1mA0Sl9lj";
    $dbname = "mac";
    $uname = $_GET["uname"];  
    echo $uname;
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($update == 0){
    $stmt = $conn->prepare("INSERT INTO desktop (uname, namee, roww, colums, paths) VALUES (:uname, :name, :row, :column, :path)");
    $stmt->bindParam(':uname', $uname);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':row', $row);
    $stmt->bindParam(':column', $column);
    $stmt->bindParam(':path', $path);
    $row = $_GET['row'];
    $column = $_GET['column'];
    $path = $_GET['path'];
    $name = $_GET['name']; 
    echo $update;
    $stmt->execute();
    echo "New records created successfully";
    header("Location: index.php");
  }
  elseif($update == 1){
    $update = [
      'namee' => $_GET["name"],
      'roww' => $_GET["row"],
      'colums' => $_GET["column"],
    ];
    $sql = "UPDATE desktop SET roww=:roww, colums=:colums WHERE namee=:namee";
    $stmt= $conn->prepare($sql);
    $stmt->execute($update);
    echo "Updated successfully";
  }
  }
  catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
?>