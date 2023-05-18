if (navigator.clipboard) {

    console.log('Clipboard API available');
  
  }
  async function paste() {
    const text = await navigator.clipboard.readText();
    document.querySelector("#area").value = document.querySelector("#area").value + text;
  }
  function safe(){
    document.getElementById("safe").classList.remove('animate__animated', 'animate__fadeOutLeft', 'animate__faster');
    document.getElementById("safe").style.visibility = "visible";
    document.getElementById("safe").classList.add('animate__animated', 'animate__fadeInLeft', 'animate__faster');
  }
  function safeback(){
    document.getElementById("safe").classList.remove('animate__animated', 'animate__fadeInLeft', 'animate__faster');
    document.getElementById("safe").style.visibility = "hidden";
    document.getElementById("safe").classList.add('animate__animated', 'animate__fadeOutLeft', 'animate__faster');
  }