<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<script>
    input.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("myBtn").click();
        }
});
function focus(){
    document.getElementById(text).select();
    document.getElementById(text).focus();
}
</script>
<body onclick="focus()">

    <form method="POST">
        <?php 
        session_start();
        if (isset($_SESSION["color"])) {
            
        }
        else{
            $_SESSION["color"]="rgb(0, 255, 0)";
        }
        if (isset($_SESSION["path"])) {
            
        }
        else{
            $_SESSION["path"] = "~";
        }
            if (isset($_POST["textt"])) {
                 $test = $_POST["textt"];
                if ($test == "?")
                {
                    $command = "Commands:<br>
                    help = Commands<br>
                    ls = List objects in current directorey<br>
                    cd = Chainge Directory<br>  
                    clear = clear History <br> 
                    color = try color help!<br>
                    ";
                }
                elseif ($test == "help")
                {
                    $command = "Commands:<br>
                    Help = Commands<br>
                    ? = Commands<br>
                    ls = List objects in current directorey<br>
                    cd = Chainge Directory<br> 
                    clear = clear History <br>  
                    color = try color help!<br>
                    ";
                }
                elseif ($test == "ls")
                {
                    if ($_SESSION["path"] == "~"){
                    $command = "Documents Applications<br>";
                    }
                    elseif($_SESSION["path"] == "Documents"){
                    $command = "PORNLINKS.txt studywork.doxt<br>"; 
                    }
                    elseif($_SESSION["path"] == "Applications"){
                        $command = "Digitalslave.exe Words.exe<br>"; 
                        }
                }
                elseif ($test == "cd")
                {
                    $command = "";
                }
                elseif ($test == "cd Documents")
                {
                    $_SESSION["path"] = "Documents";
                    $command = "";
                }
                elseif ($test == "cd documents")
                {
                    $_SESSION["path"] = "Documents";
                    $command = "";
                }
                elseif ($test == "cd Applications")
                {
                    $_SESSION["path"] = "Applications";
                    $command = "";
                }
                elseif ($test == "cd applications")
                {
                    $_SESSION["path"] = "Applications";
                    $command = "";
                }
                elseif ($test == "cd..")
                {
                    $_SESSION["path"] = "~";
                    $command = "";
                }
                elseif ($test == "cd ..")
                {
                    $_SESSION["path"] = "~";
                    $command = "";
                }
                elseif ($test == "clear")
                {
                    $_SESSION["text"] = "";
                    $command = "cleared<br>";
                }
                elseif ($test == "color white")
                {
                    $_SESSION["color"] = "white";
                    $command = "";
                }
                elseif ($test == "color green")
                {
                    $_SESSION["color"] = "rgb(0, 255, 0)";
                    $command = "";
                }
                elseif ($test == "color red")
                {
                    $_SESSION["color"] = "red";
                    $command = "";
                }
                elseif ($test == "color yellow")
                {
                    $_SESSION["color"] = "yellow";
                    $command = "";
                }
                elseif ($test == "color blue")
                {
                    $_SESSION["color"] = "blue";
                    $command = "";
                }
                elseif ($test == "color grey")
                {
                    $_SESSION["color"] = "grey";
                    $command = "";
                }
                elseif ($test == "color purple")
                {
                    $_SESSION["color"] = "purple";
                    $command = "";
                }
                elseif ($test == "color brown")
                {
                    $_SESSION["color"] = "brown";
                    $command = "";
                }
                elseif ($test == "color help")
                {
                    $command = "
                    color yourcolor<br>
                    red   = 🟥<br>
                    blue  = 🟦<br>
                    yellow= 🟨<br>
                    green = 🟩<br>
                    purple= 🟪<br>
                    brown = 🟫<br>
                    ";
                }
                else{
                    $command = "-bash $test: command not Found<br>";
                }
                $text = $_SESSION["text"] . $text =  $_SESSION["NAME"] . '-MacBook:'.$_SESSION["path"] .' '. $_SESSION["NAME"]. '$ ' . $_POST["textt"] . "<br>$command";
                echo $text;
                $_SESSION["text"] = $text;
                } 
        echo $_SESSION["NAME"] . '-MacBook:' . $_SESSION["path"] .' '. $_SESSION["NAME"]. '$';
        ?> 
        <input type="text" id="text" name="textt" autocomplete="off"></input>
        <button type="submit" id="myBtn"></button>
    </form>  
    <style>
body{
background:rgba(0, 0, 0, 0.356);
<?php
echo 'color:' . $_SESSION["color"] . ';';
echo  'text-shadow: 2px 2px 2px ' . $_SESSION["color"] . ';';
?>
}
input{
<?php
echo 'color:' . $_SESSION["color"] . ';';
echo  'text-shadow: 2px 2px 2px ' . $_SESSION["color"] . ';';
?>
}
</style>
</body>
</html>