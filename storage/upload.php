<?php
$uname = $_POST["uname"];
$folderok = file_exists("../userdata/" . $uname ."/");
if ($folderok == 0){
    mkdir("/var/www/html/userdata/" . $uname ."");
} 
else{
    echo "Directory Exists,   ";
}
$target_dir = "../userdata/" . $uname ."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Error";
    }
}


echo "<br><br><br>";
echo "now the directory has:<table><tr><th>Name</th><th>Size</th><th>Type</th></tr>";#
$filetypes = array(
    ".png" => "Picture",
    ".jpg" => "Picture",
    ".txt" => "text"
);
$files1 = scandir($target_dir, SCANDIR_SORT_DESCENDING);
$items = 0;
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

    $ext = strstr($i, '.');
    if ($i == "." || $i == ".."){
        
    }
    else{
        $items++;
        if (array_key_exists($ext, $filetypes)) {
            $filetype=$ext;
        }
        else{
            $filetype="File";
        }
        echo "<tr><td>" . $i . "</td><td>" . $filesize ."</td><td>" . $filetype."</td><tr>";
    }
    
}
echo "</table>";
?>