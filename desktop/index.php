<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and Drop</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../winbox-master/dist/winbox.bundle.js"></script>
    <script src="../script/desktop.js"></script>
</head>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
  var dragSrcEl = null;
    
    function handleDragStart(e) {
      this.style.opacity = '1';
      
      dragSrcEl = this;

      e.dataTransfer.effectAllowed = 'move';
      e.dataTransfer.setData('text/html', this.innerHTML);
    }

    function handleDragOver(e) {
      if (e.preventDefault) {
        e.preventDefault();
      }

      e.dataTransfer.dropEffect = 'move';
      
      return false;
    }

    function handleDragEnter(e) {
      this.classList.add('over');
    }

    function handleDragLeave(e) {
      this.classList.remove('over');
    }

    function handleDrop(e) {
      if (e.stopPropagation) {
        e.stopPropagation();
      }
      
      if (dragSrcEl != this) {
        dragSrcEl.innerHTML = this.innerHTML;
        this.innerHTML = e.dataTransfer.getData('text/html');
      }
      
      return false;
    }

    function handleDragEnd(e) {
      this.style.opacity = '1';
      items.forEach(function (item) {
        item.classList.remove('over');
      });
    }
    
    
    let items = document.querySelectorAll('.container .box');
    items.forEach(function(item) {
      item.addEventListener('dragstart', handleDragStart, false);
      item.addEventListener('dragenter', handleDragEnter, false);
      item.addEventListener('dragover', handleDragOver, false);
      item.addEventListener('dragleave', handleDragLeave, false);
      item.addEventListener('drop', handleDrop, false);
      item.addEventListener('dragend', handleDragEnd, false);
    });
});
</script>
<body>
    <!--<div id="appcreator">
      <form method="get" action="add.php"><input type="text" placeholder="name" id="name" name="name"><input type="text" placeholder="row" id="row" name="row"><input type="text" placeholder="column" id="column" name="column"><input type="text" placeholder="image path" id="path" name="path"><input type='hidden' name='update' value='0'/><button type="submit" onclick="add()">Add App</button></form>
    </div>-->
    <table class="container" id="container">
        <tr id="r1">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r2">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r3">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r4">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r5">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r6">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r7">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r8">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r9">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r10">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r11">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r12">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r13">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r14">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r15">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r16">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r17">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
        <tr id="r18">
          <td id="p1"><div id="box" draggable="true" class="box"></div></td>
          <td id="p2"><div id="box" draggable="true" class="box"></div></td>
          <td id="p3"><div id="box" draggable="true" class="box"></div></td>
          <td id="p4"><div id="box" draggable="true" class="box"></div></td>
          <td id="p5"><div id="box" draggable="true" class="box"></div></td>
          <td id="p6"><div id="box" draggable="true" class="box"></div></td>
          <td id="p7"><div id="box" draggable="true" class="box"></div></td>
          <td id="p8"><div id="box" draggable="true" class="box"></div></td>
          <td id="p9"><div id="box" draggable="true" class="box"></div></td>
          <td id="p10"><div id="box" draggable="true" class="box"></div></td>
          <td id="p11"><div id="box" draggable="true" class="box"></div></td>
          <td id="p12"><div id="box" draggable="true" class="box"></div></td>
          <td id="p13"><div id="box" draggable="true" class="box"></div></td>
          <td id="p14"><div id="box" draggable="true" class="box"></div></td>
          <td id="p15"><div id="box" draggable="true" class="box"></div></td>
          <td id="p16"><div id="box" draggable="true" class="box"></div></td>
          <td id="p17"><div id="box" draggable="true" class="box"></div></td>
          <td id="p18"><div id="box" draggable="true" class="box"></div></td>
          <td id="p19"><div id="box" draggable="true" class="box"></div></td>
          <td id="p20"><div id="box" draggable="true" class="box"></div></td>
          <td id="p21"><div id="box" draggable="true" class="box"></div></td>
          <td id="p22"><div id="box" draggable="true" class="box"></div></td>
          <td id="p23"><div id="box" draggable="true" class="box"></div></td>
          <td id="p24"><div id="box" draggable="true" class="box"></div></td>
          <td id="p25"><div id="box" draggable="true" class="box"></div></td>
          <td id="p26"><div id="box" draggable="true" class="box"></div></td>
          <td id="p27"><div id="box" draggable="true" class="box"></div></td>
          <td id="p28"><div id="box" draggable="true" class="box"></div></td>
          <td id="p29"><div id="box" draggable="true" class="box"></div></td>
          <td id="p30"><div id="box" draggable="true" class="box"></div></td>
        </tr>
      </table>
</body>
</html>
<?php
$servername = "localhost";
$username = "debian-sys-maint";
$password = "iRyG9PR1mA0Sl9lj";
$dbname = "mac";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo $_GET["uname"];
$sql = "SELECT ID, namee, roww, colums, paths FROM desktop WHERE uname='" . $_GET['uname'] . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["namee"] . " Row: " . $row["roww"] . " Column: " . $row["colums"] . "<br>";
    echo "<script id='remove'>
      mainDiv = document.getElementById('container');
      childDiv = mainDiv.getElementsByTagName('tr')[" . $row["roww"] . "];
      requiredDiv = childDiv.getElementsByTagName('td')[" . $row["colums"] . "];
      requiredDiv.firstChild.innerHTML = '<div name=" . $row["namee"] . " ondragend=getPosition(`" . $row["namee"]  . "`) onmousedown=currentPosition(this) src=" . $row["paths"] . " ondblclick=openLink(this) id=" . $row["namee"] . "app><img src=" . $row["paths"] . " width=90px height=90px>' + '" . $row["namee"] . "</div>';
      requiredDiv.classList.add('app');
      console.log(requiredDiv);
      (function () {
        var node = document.getElementById('remove');
        if (node.parentNode) {
          node.parentNode.removeChild(node);
        }
    })();
    </script>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<script>
function getPosition(elementt){
  console.log(elementt);
    element = document.querySelector("#" + elementt + "app");
    console.log(element);
    row = element.parentElement.parentElement.id;
    column = element.parentElement.parentElement.parentElement.id;
    appname = element.getAttribute("name");
    path = element.getAttribute("src");
    uname = '<?php echo $_GET['uname']; ?>';
    console.log(appname);
    row = row.match(/\d+/)[0];
    row = parseInt(row);
    row = row - 1;
    column = column.match(/\d+/)[0];  
    column = parseInt(column);
    column = column - 1;
    $.ajax({
    url: 'add.php?name=' + appname +'&row=' + column + '&column=' + row + '&path=' + path + '&update=1' + '&uname=' + '<?php echo $_GET['uname'];?>',
    type: 'get',
    success: function(response){
      //console.log("success");
      //console.log("Current Position: x =" + row + "Y =" + column);
      //console.log("Past Position: x =" + currentx +"Y =" + currenty)  
    }
    });
};
function currentPosition(appp){
    currentx = appp.parentElement.parentElement.id;
    currenty = appp.parentElement.parentElement.parentElement.id;
    currentx = currentx.match(/\d+/)[0];
    currentx = parseInt(currentx);
    currentx = currentx - 1;
    currenty = currenty.match(/\d+/)[0];
    currenty = parseInt(currenty);
    currenty = currenty - 1;
}
function openLink(){
    calc();
}
</script>
