<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    @font-face {
        font-family: apple;
        src: url(../fonts/SFPRODISPLAYMEDIUM.OTF);
    }
    body{
        font-family: apple;
    }
    #fild{
    width:300px;
    border-radius:10px;
    border-width:1px;
    border-style:solid;
    border-color:grey;
}
#id{
    border-style:none;
    width:90%;
    height:35px;
    outline: none;
}
#pwd{
    border-style:none;
    width:90%;
    height:35px;
    outline: none;
}
#border{
    border-top:1px solid grey;
    height:2px;
}
#text{
    margin-left:-160px;
}
#remember{
    margin-top:20px;
}
#back{
        margin-right:10px;
        position:absolute;
        font-size:45px;
        font-weight:900;
        z-index: 2;
    }
</style>
<body>
<div id="back" onclick="window.open('settings.php','_self')"><</div>
    <form>
        <center><img src="../../img/sign-in.png" width="150px"></center>
        <center><h1>Apple ID</h1></center>
        <center><h3>Manage your Apple account</h3></center>
        <center><div id="fild">
        <div id="text">Apple-ID<br></div>
        <input type="text" id="id"></input>
        <div id="border"><div id="text">Passwort</div></div><br>
        <input type="text" id="pwd"></input><br></div>
        <input type="checkbox" id="remember">Remember me</input>
        </center>
    </form>
</body>
</html>