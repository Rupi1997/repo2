<!DOCTYPE HTML>
<html>
<head>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php
$mobile_count = 5000 ;
?>
<script type="text/javascript">
var mobile_count="<?php echo $mobile_count ?>";
console.log(mobile_count);
var web_count=1000;
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer",
  {
    title:{
      text: "Attaching Click event on dataSeries"
    },
    data: [
    {
      type: "column",
      click: onClick,
      dataPoints: [
       { label: "MOBILE", y: mobile_count },
        { label: "WEB", y: web_count  },
  
      ]
    }
    ]
  });
  chart.render();

  function onClick(e) {
    alert(  e.dataSeries.type + ", dataPoint { x:" + e.dataPoint.label + ", y: "+ e.dataPoint.y + " }" );
  }
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
