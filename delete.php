<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        include("connect.php");
        $name=$_GET["name"];
		$loeschen= "DELETE FROM spiele WHERE Spielname = '$name'";
		$loesch = mysqli_Query ($db, $loeschen);
        if ($loesch){
		echo "Löschen hat geklappt";}
        else { 
		echo "$loeschen";}
    ?>
    <a href="index.php">Zurück</a> 
</body>
</html>