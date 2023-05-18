<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border:1px black solid;
        padding: 0;
        margin:0;
        width: 100%;
    }
    table th{
        padding:0;
        margin:0;
        border:1px black solid;
        background-color: lightgrey;
    }
    td{
        border-bottom: 2px solid lightgrey;
    }
    #tname{
    }
    .context-menu {
            position: absolute;
            text-align: center;
            background: lightgray;
            border-radius: 5px;
        }
  
        .context-menu ul {
            padding: 0px;
            margin: 0px;
            min-width: 150px;
            list-style: none;
        }
  
        .context-menu ul li {
            padding-bottom: 7px;
            padding-top: 7px;
        }
  
        .context-menu ul li a {
            text-decoration: none;
            color: black;
        }
  
        .context-menu ul li:hover {
            background: darkgray;
            border-radius: 5px;
        }
</style>
<body>
<div id="contextMenu" class="context-menu" 
        style="display:none">
        <ul>
            <li><a href="#">Open</a></li>
            <li><a href="#">Open width</a></li>
            <li><a href="#">Move to Trash</a></li>
            <li><a href="#">Get Info</a></li>
            <li><a href="#">Rename</a></li>
            <li><a href="#">Copy</a></li>
        </ul>
    </div>
<?php
echo "<table><tr><th id='tname'>Name</th><th>Size</th><th>Type</th></tr>";
//gets the Username
$uname = $_POST["uname"];
//sets the Home Directory and Creates one if none existant
$folderok = file_exists("../userdata/" . $uname ."/");
if ($folderok == 0){
    mkdir("/var/www/html/userdata/" . $uname ."");
} 
else{
}
$target_dir = "../userdata/" . $uname ."/";

//Array of all the possible file types
$filetypes = array(
    ".png" => "Picture",
    ".jpg" => "Picture",
    ".txt" => "text",
    ".mp4" => "Video",
    ".mp3" => "Sound",
    ".blend" => "Blender File",
    "" => "Folder"
);

//creates a table 
$files1 = scandir($target_dir, SCANDIR_SORT_DESCENDING);
$items = 0;
//Chalculates what size the File has B/KB/MB The general maximum upoload should be 999mb so gb should for now not be needed
foreach($files1 as $i){
    $filesize = filesize("../userdata/" . $uname ."/".$i);
    if ($filesize < 1024 && $filesize > 1){
        $filesize = strval($filesize) . " Byte";
    }
    elseif ($filesize < 1024000){
        $filesize = $filesize / 1024;
        $filesize = round($filesize, 2);
        $filesize = strval($filesize) . " KB";
    }
    elseif ($filesize < 10240000000){
        $filesize = $filesize/1024000;
        $filesize = round($filesize, 2);
        $filesize = strval($filesize) . " MB";
    }
    else{
        echo"to big";
    }
//gets the file extension from the name like .png and .txt to compair to the extension list
    $ext = strstr($i, '.');
    if ($i == "." || $i == ".."){
        
    }
    else{
        $items++;
        if (array_key_exists($ext, $filetypes)) {
            $filetype=$filetypes[$ext];
        }
        else{
            $filetype="File";
        }
        echo "<tr id='" . $i . "' onclick='context(this)'><td>" . $i . "</td><td>" . $filesize ."</td><td>" . $filetype."</td><tr>";
    }
    
}
echo "</table>";
?>
<script>
        document.onclick = hideMenu;
        document.querySelector("table").oncontextmenu = rightClick;
  
        function hideMenu() {
            document.getElementById(
                "contextMenu").style.display = "none"
        }
  
        function rightClick(e) {
            e.preventDefault();
  
            if (document.getElementById(
                "contextMenu").style.display == "block")
                hideMenu();
            else {
                var menu = document
                    .getElementById("contextMenu")
                      
                menu.style.display = 'block';
                menu.style.left = e.pageX + "px";
                menu.style.top = e.pageY + "px";
            }
        }
        function context(id){
            console.log(id.id);
        }
        
    </script>
</body>
</html>
