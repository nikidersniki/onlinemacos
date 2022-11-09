<?php
session_start();
$_SESSION["text"] = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="winbox-master/dist/css/winbox.min.css">
    <link rel="stylesheet" href="winbox-master/dist/css/themes/modern.min.css">
    <title>mcos-online</title>    
</head>
<script src="winbox-master/dist/winbox.bundle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  window.onload = function (){
  url = "url('apps/background/<?php echo $_SESSION["BG"];?>')"
  document.body.style.backgroundImage = url;
  var x = document.getElementById("loader");
    setTimeout( () =>{
      x.style.display = "none";
    }, 2000);
}
</script>
<script>
    function launchpad(){
    var x = document.getElementById("launchpad");
            if (x.style.display === "block") {
        x.style.display = "none";
            } else {
        x.style.display = "block";
            }
        }
document.getElementsByClassName('handle').onclick = function () {
  slideSource.classList.toggle('fade');
}
</script>
<?php
$scale = $_POST['vol'];?>
<body onmouseover="body.style.zoom='<?php echo $scale;?>%'" onmouseenter="">
<script>
</script>
<div id="loader"><center><div id="loading_logo"><img src="img/Apple2.svg" width="100px" height="100px"></div><img src="img/loading-icon.gif" width="30px" height="30px"></center></div>
<div id="backstore" style="display: none">
  <div id="word">
    <iframe url="editor.php"></iframe>
  </div>
</div> 
<script>
  function music()   {
 var cl=event.target.className;
  new WinBox("‎", {
       class: "modern no-resize",
       url: "files/comments/index.php",
       width: "1800",
        height: "900",
        onclose: function(rm_word){
        const element = document.getElementById('music');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'music';
tag.name = 'music';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};

function doom()   {
 var cl=event.target.className;
  new WinBox("‎", {
       class: "game no-min no-resize",
       url: "apps/doom.php",
       width: "1504",
        height: "1000",
        onclose: function(rm_word){
        const element = document.getElementById('doom');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'doom';
tag.name = 'doom';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};

function mc()   {
 var cl=event.target.className;
  new WinBox("‎", {
       class: "game",
       url: "apps/mc.php",
        width: "885",
        height: "605",
        onclose: function(rm_word){
        const element = document.getElementById('mc');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'mc';
tag.name = 'mc';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};

function calc()   {
 var cl=event.target.className;
  new WinBox("‎", {
       class: "calc",
       url: "apps/calculator.html",
        width: "380",
        height: "585",
        onclose: function(rm_word){
        const element = document.getElementById('calc');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'calc';
tag.name = 'calc';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};

function word()   {
  const winbox = new WinBox("‎", {
       class: "modern",
       url: "editor.php",
       onclose: function(rm_word){
        const element = document.getElementById('Word');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'Word';
tag.name = 'Word';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};
function background()   {
  const winbox = new WinBox("‎", {
       class: "modern",
       width: "850",
        height: "550",
       url: "apps/background/background.php",
       onclose: function(rm){
        const element = document.getElementById('background2');
        element.remove();
    },
  })
var tag = document.createElement("button");
tag.id = 'background2';
tag.name = 'background2';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};
function storer()   {
  const winbox = new WinBox("‎", {
       class: "modern",
       url: "apps/appstore/index.html",
       onclose: function(rm){
        const element = document.getElementById('store');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'store';
tag.name = 'storer';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};

function finder()   {
  const winbox = new WinBox("‎", {
       class: "modern",
       url: "apps/file/file.html",
       onclose: function(rm_word){
        const element = document.getElementById('Finder2');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'Finder2';
tag.name = 'Finder2';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};

function terminal()   {
  const winbox = new WinBox("‎", {
       url: "apps/terminal/terminal.php",
       onclose: function(rm){
        const element = document.getElementById('terminal');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'terminal';
tag.name = 'term';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};
function nothing(){
    console.log("off");
  }
function about()   {
 var cl=event.target.className;
  new WinBox("‎", {
        class: [ "no-min", "no-max", "no-full", "no-resize", "modern"],
        width: "850",
        height: "550",
       url: "about.php"
})};
function settings()   {
 var cl=event.target.className;
  new WinBox("‎", {
        class: ["no-resize", "modern",],
        width: "600",
        height: "600",
        url: "apps/Settings/settings.php",
        onclose: function(rm_word){
        const element = document.getElementById('Settings');
        element.remove();
    },
})
var tag = document.createElement("button");
tag.id = 'Settings';
tag.name = 'Settings';
tag.style.backgroundColor = "#00000000";
var element = document.getElementById("footer-buttons");
element.appendChild(tag);
};
</script>
    <div id="header"><div id="logo"><img src="img/Apple_logo_black.svg" height="20px" onclick="logo_dropdown()" class="dropbtn">
    <div id="myDropdown" class="dropdown-content">
    <a onclick="about()" id="about">About This Mac</a>
    <a onclick="settings()">System Preferences....</a>
    <a onclick="storer()">App Store....</a>
    <a href="#" id="recent">Recent Items</a>
    <a onclick="window.close()">Force Quit....</a>
    <a href="index.php" target="_sealth" id="handle">Sleep</a>
    <a onclick="location.reload();">Restart....</a>
    <a onclick="window.close()" id="quit">Shut Down....</a>
    <a href="index.php">Log Out User</a>
  </div>
  <a onclick="finder()" id="topbar">Finder</a> 
  <a id="topbar">File</a> 
  <a id="topbar">View</a> 
  <a id="topbar">Go</a> 
  <a id="topbar">Window</a> 
  <a id="topbar">Help</a> 
  <a id="battery"></a> 
  <img id="batteryimg" width="36px"> 
  <img id="controll" src="apps/controll/controll.svg" width="25px" onclick="controll_dropdown()" class="dropbtn2">
  <div id="controll_drop" class="controll_dropdown-content">
    <div id="memo"><img src="apps/controll/mic.svg" width="15px">Voice Memos</div>
    <div id="wrap2">
        <div id="wrap3">
          <div id="wifi"><img src="apps/controll/ios-wifi-2.svg" width="35px"><div><h1>Wi-fi</h1><p>Home</p></div></div>
          <div id="blue"><img src="apps/controll/bluetooth-107.svg" width="35px"><div><h1>Bluetooth</h1><p>On</p></div></div>
          <div id="air"><img src="apps/controll/airdrop.svg" width="35px"><div><h1>Airdrop</h1><p>Contacts Only</p></div></div>
        </div>
        <div id="wrap4">
          <div id="wrap5">
            <div id="work"><img src="apps/controll/ios-briefcase-4.svg" width="35px"><p>Work</p></div>
          </div>
          <div id="wrap6">
          <div id="wrap7">
            <p><img src="apps/controll/key.svg" width="30px">Keyboard<br>Brightness</p>
          </div>  
          <div id="wrap8">
            <p><img src="apps/controll/screen.svg" width="30px"><br>Screen<br>Mirrowing</p>
          </div>  
          </div>
        </div>
    </div>
    <div id="wrap9">
          <p>Display</p>
          <div class="slidecontainer">
              <input type="range" min="1" max="100" value="100" class="slider" id="myRange">
          </div>
        </div>
        <div id="wrap10">
        <p>Sound</p>
          <center><div class="slidecontainer">
              <input type="range" min="1" max="100" value="90" class="slider" id="myRange">
          </div></center>
        </div>
        <div id="wrap11">
          <img src="apps/controll/music.svg" width="25px"><p>Music</p><img src="apps/controll/play.svg" width="25px" id="play"><img src="apps/controll/skip.svg" width="25px" id="skip">
        </div>
  </div>
  <a id="date"></a>
  <a id="time"></a> 
  <script>
      GetTime();
function GetTime(){
  var CurrentTime = new Date()
  var hour = CurrentTime.getHours()
  var minute = CurrentTime.getMinutes()

  if(minute < 10){
    minute = "0" + minute
  }

  var GetCurrentTime = hour + ":" + minute + " ";

  document.getElementById("time").innerHTML = GetCurrentTime;
  setTimeout(GetTime,1000)
}


    var current = new Date();
    const element3 = document.getElementById('date');
    date = current.toLocaleDateString(); 
    element3.innerHTML = date;
</script>
</div>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function logo_dropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function controll_dropdown() {
  document.getElementById("controll_drop").classList.toggle("show2");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {
    var dropdowns = document.getElementsByClassName("controll_dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('2show')) {
        openDropdown.classList.remove('2show');
      }
    }
  }
}
</script>
  </div></div>                                                                                                                       
<div id="launchpad"onclick="launchpad()"><center>
  <div class="grid-container">
  <div class="Doom"><img src="/img/doom.png" width="150px" onclick="doom()"></div>
  <div class="Word"><img src="img/word.svg" width="150px" onclick="word()"></div>
  <div onclick="storer()"><img src="/apps/appstore/app.svg" width="150px"></div>
  <div onclick="background();"><img src="img/background.png" width="150px"></div>
  <div onclick="settings()"><img src="/img/settingsicon.png" width="150px"></div>
  <div onclick="terminal();"><img src="/apps/terminal/icon.png" width="150px"></div>
  <div onclick="mc();"><img src="/img/minecraft.svg" width="150px"></div>
</div>
<div class="grid-container">
<div onclick="music();"><img src="/img/apple_music.svg" width="150px"></div>
<div onclick="calc();"><img src="/apps/calc_icon.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
</div>
<div class="grid-container">
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
<div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
  </div>
  <div class="grid-container">
  <div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
  <div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
  <div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
  <div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
  <div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
  <div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
  <div onclick="none();"><img src="/img/Image_PlaceHolder.png" width="150px"></div>
  </center></div>
<div id="filler"></div>
<footer>
    <div id="footer-buttons"><button id="finder" onclick="finder()"></button><button onclick='launchpad();' id="launch"><img src="/img/launchpad.png" height= "50px" width:="50px"></button><button onclick="background();" id="background"></button><button onclick="" id="dock_"></button></div><div id="trash"><img src="img\pngegg (1).png" width="50px"  height="50px"></div>
</footer>
</body>
</html>