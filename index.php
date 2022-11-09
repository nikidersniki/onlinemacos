<html>  
<head>  
    <title>mcos-online</title>    
</head>  
<style>
    @font-face {
    font-family: apple;
    src: url(fonts/SFPRODISPLAYMEDIUM.OTF);
}
    @font-face {font-family: "Uni Sans Heavy"; src: url("//db.onlinewebfonts.com/t/4f6fb2fa3c231278167b36e966718cbb.eot"); src: url("//db.onlinewebfonts.com/t/4f6fb2fa3c231278167b36e966718cbb.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/4f6fb2fa3c231278167b36e966718cbb.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/4f6fb2fa3c231278167b36e966718cbb.woff") format("woff"), url("//db.onlinewebfonts.com/t/4f6fb2fa3c231278167b36e966718cbb.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/4f6fb2fa3c231278167b36e966718cbb.svg#Uni Sans Heavy") format("svg"); }
a{
    color:black;
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
        padding: 10px;  
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
    #discord{
        padding:30px;
        padding-top:10px;
        position:absolute;
        border-radius:15px;
        background:#424549;
        top:10px;
        right:10px;
        font-family:Uni Sans Heavy;
    }
    #discord a {
        background:#7289da;
        border-radius:5px;
        padding:15px;
        top:30px;
        color:white;
        font-weight:400;
        font-style:bold;
    }
    #discord p{
       color:lightgrey;
       font-size:20px;
       margin-bottom:0px;
    }
</style>
<body>  
    <div id="discord">
        <p>MacOS-Online Discord<p><br>
    <center><a href="https://discord.gg/T5hpsnBYZU" target="_blank">Join our Discord</a><center>
    </div>
    <div id = "frm">  
        <center><h1>Login</h1></center>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
            <center><label> Username: </label> 
                <input type = "text" id ="user" name  = "user" />  </center> 
            </p>  
            <p>  
            <center><label> Password:  ‎‎‎</label>  
                <input type = "password" id ="pass" name  = "pass" />  </center> 
            </p>  
            <p>     
                <center><input type =  "submit" id = "btn" value = "Login" /> </center> 
            </p>  
        </form> 
        <p>
    <center><a href="register.php">Create Account</a></center> 
    </div>  
    <script>  
        if(/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
            location.href = "test.php";
        }
        else{

        }
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  