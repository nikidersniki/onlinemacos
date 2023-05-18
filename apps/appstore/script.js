function getapps(str) {
    if (str == "") {
      document.querySelector("#scroll").innerHTML = "";
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.querySelector("#scroll").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","connector.php?q="+str,true);
      xmlhttp.send();
    }
  }
  function category(str) {
    if (str == "") {
      document.querySelector("#scroll").innerHTML = "";
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.querySelector("#scroll").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","connector_categorie.php?q="+str,true);
      xmlhttp.send();
    }
  }