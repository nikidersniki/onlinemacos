<!DOCTYPE html>
<html>
<head>
<style>
table {
  color:white;
  text-align: center;
  width: 100%;
  border-collapse: collapse;
  font-size:20px;
}
table, td, th {
  border-bottom: 1px solid white;
  padding: 5px;
  padding-top: 15px;
}
#info{
  color:white;
  font-size:22px;
  text-align: center;
}
#buttons{
}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','debian-sys-maint','iRyG9PR1mA0Sl9lj');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"mac");
$sql="SELECT * FROM apps WHERE categorie LIKE '".$q."%'";
$result = mysqli_query($con,$sql);

echo "
<div id='info'></div>
<table>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['categorie'] . "</td>";
  echo "<td>" . $row['url'] . "<div id='buttons'><input type='button' value='Add to desktop'><input type='button' value='Add to Lounchpad'></div></td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>