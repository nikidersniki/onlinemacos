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
          url: "apps/about.php"
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