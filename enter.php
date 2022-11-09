<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        @font-face {
            font-family: apple;
            src: url(fonts/SFPRODISPLAYMEDIUM.OTF);
        }
        body{
        background-color:black;
        margin:0px;
        }
        div{
        position:absolute;
        top:40%;
        left:40%;
        text-align:center;
        width:300px;
        background-Color:white;
        padding:40px;
        border-radius:15px;
        }
        a{
            font-size:22px;
            font-weight:800;
            font-family: apple;
            text-decoration:none;
            font-style:none;
            color:Black;
            background-color:grey;
            border-radius:15px;
            padding-left:25px;
            padding-right:25px;
            padding-top:10px;
            padding-bottom:10px;
            margin:10px;
        }
        h1{
            font-family: apple;  
            font-size:35px;
            font-weight:800;
        }
        h2{
            color:white;
            font-family: apple;  
            font-size:35px;
            font-weight:800;
        }
        p{
            font-family: apple;  
            font-size:14px;
            font-weight:500; 
        }
        #start{
            padding:10px;
            padding-left:20px;
            padding-right:20px;
        }
    </style>
</head>
<script>

</script>
<body>
<center><h2>Be aware that this Project is still in development and more features will be added soon</h2>  <br>
<h2>If you encountere any bugs please report them on the Discord. (Discord: <a href="https://discord.gg/T5hpsnBYZU">Link</a> )</h2></center>
    <div>
    <h1>Press F11(FN) bevore pressing start</h1>
    <p>This website is for pc only on other devices the experience will be limited.</p>   
    <form action="desktop.php" method="post">
    <input id="start" type="submit" name="Lounch" value="Start">
    
    <?php
        session_start()

        ?>
</form>
</div>
</body>
</html>