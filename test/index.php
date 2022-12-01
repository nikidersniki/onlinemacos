<?php
$servername = "localhost";
$username = "debian-sys-maint";
$password = "iRyG9PR1mA0Sl9lj";
$dbname = "tests";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);


}
$name = $_GET['name'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewsport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="icons.css">
  <style>
  .draggable { width: 100px; height: 100px; padding: 10px; float: left; font-size: .9em; }
  .ui-widget-header p, .ui-widget-content p { margin: 0; }
  #snaptarget { height: 140px; }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
   $( function() {
    document.querySelectorAll("#app").forEach((v) => {
      $( v ).draggable({ grid: [ 120, 170 ], containment: "body" });
    })
  } );
  </script>
</head>
<body>
  <form action="insert.php" method="get">
    <input id="insert" type="text" name="app" placeholder="name">
    <input id="img" name="img" placeholder="img"> 
    <input id="dbname" name="dtname" value="<?php echo $name; ?>" type="hidden">
    <button id="insert" type="submit">Insert</button>
  </form>
<br style="clear:both">
  <?php
    $sql = "SELECT id, name, img FROM $name";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      if ($row["img"]=="")
        {
          $row["img"] = "arch_linux.svg";
        }
      echo("<div id='app' class='draggable ui-widget-content'>
      <img id='icon' src='" . $row["img"] . "' width='100px'>
      <div id='label'><label>" . $row["name"] . "</label></div></div>");
    }
    
  ?>
<?php echo "<h1> Username=" . $_GET["name"] . "</h1>";?>
</body>
</html>