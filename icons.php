
<!DOCTYPE html>
<html>
<head>
    <style>
        #container {
  position: relative;
  transform-origin: top left;
  box-sizing: content-box;
}

#parentContainer {
  width: 500px;
  height: 500px;
  overflow: auto;
  box-sizing: content-box;
}

.box {
  width: 100px;
  height: 100px;
  position: absolute;
  border: 1px solid red;
  box-sizing: border-box; /* important otherwise we need to do math for the border calculation*/
}

.grid {
  width: 500px;
  height: 500px;
  box-sizing: border-box;
  border: none;
  background: 
   linear-gradient(0deg, #CCC 1px, rgba(0, 0, 0, 0) 1px),
   linear-gradient(90deg, #CCC 1px, rgba(0, 0, 0, 0) 1px), 
   linear-gradient(0deg, rgba(0, 0, 0, 0.05) 1px, rgba(0, 0, 0, 0) 1px), 
   linear-gradient(90deg, rgba(0, 0, 0, 0.05) 1px, rgba(0, 0, 0, 0) 1px)
 
}

/* pixel % calculated as : 100 / number_of_grids; */

.g-10 {
  background-size: 10% 10%, 10% 10%, 10% 10%, 10% 10%;
}

.g-20 {
  background-size: 5% 5%, 5% 5%, 5% 5%, 5% 5%;
}

.g-30 {
  background-size: 3.3% 3.3%, 3.3% 3.3%, 3.3% 3.3%, 3.3% 3.3%;
}

.g-40 {
  background-size: 2.5% 2.5%, 2.5% 2.5%, 2.5% 2.5%, 2.5% 2.5%;
}

.g-50 {
  background-size: 2% 2%, 2% 2%, 2% 2%, 2% 2%;
}
    </style>
    <script src="/scripts/snippet-javascript-console.min.js?v=1"></script>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<label style="margin-right:5px;">Snap To Grid : </label> <span id="lod"></span>
<select id="snapToGrid">
  <option value="10" selected>10*10</option>
  <option value="20">20*20</option>
  <option value="30">30*30</option>
  <option value="40">40*40</option>
  <option value="50">50*50</option>
</select>

<div id="parentContainer" class="grid g-10">
  <div id="container">
    <div class="box" style="left:0px;top:0px;"></div>
  </div>
</div>
    <script type="text/javascript">
          var mousedown = false;
  var mouseStartXposition;
  var zoomContainer = $("#container");
  var $box;
  var snapToGridContainer = $("#snapToGrid");
  var snapToGridValue = 10; // made 10 grid (first option) as default
 
  //handle changing of grid class and snap value
  function initGrid() {
    $('#parentContainer').removeClass();
    $('#parentContainer').addClass('grid g-'+$('#snapToGrid').val());

    snapToGridCount = parseInt(snapToGridContainer.val()); // how many grids

    //calc. the percentage of space a single grid would occupy
    snapToGridPct = 100/snapToGridCount; //%
    //convert that into absolute pixels considering our container div size
    //ie. how much space in pixel a grid would occuppy
    snapToGridValue = (snapToGridPct/100) * 500; // 500 is width(and height) of #parentContainer

    //for decimal results
    snapToGridValue = parseInt((snapToGridValue))
  }

$(document).ready(function() {

  $('#snapToGrid').change(initGrid)

  $(".box").mousedown(function(event) {
    mousedown = true;
    $box = $(this);

    //UI feedback
    $box.css('cursor', 'pointer')
    $box.mouseup(function () {
      $(this).css('cursor', 'inherit');
    })
  });

  $("#parentContainer, .box").mouseup(function() {
    mousedown = false;
  });

  $("#parentContainer").mousemove(function(event) {
    if (mousedown) {
      var clientX = event.clientX;
      var clientY = event.clientY;

      // Include Scroll Left and Top
      clientX = clientX + $("#container").scrollLeft();
      clientY = clientY + $("#container").scrollTop();

      clientX = clientX - zoomContainer.offset().left;
      clientY = clientY - zoomContainer.offset().top;
 
      var snapedX = clientX - (clientX % snapToGridValue);
      var  snapedY = clientY - (clientY % snapToGridValue);

      $box.css({
        top: snapedY,
        left: snapedX
      })
    }
  });

  initGrid();//start on page load
});
    </script>
</body>
</html>