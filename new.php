<html>

<style>
	 #outer-circle {
	margin-left: 200px;
	border: 15px solid;
   background: #fff;
   border-radius: 50%;
   height: 500px;
   width: 500px;
   //position: relative;
   /* 
    Child elements with absolute positioning will be 
    positioned relative to this div 
   
 }
 #inner-circle {
   position: absolute;
   background: #000;
   border-radius: 50%;
   height: 50px;
   width: 50px;
   
    Put top edge and left edge in the center
   
   top: 50%;
   left: 50%;
   margin: -25px 0px 0px -25px;
   /* 
    Offset the position correctly with
    minus half of the width and minus half of the height 
   */
 }

}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$( document ).ready(function() {
		$("#slider").change(function() {
	 		var slide_amount = $('#slider'). val();

			$("#range").html(slide_amount);
			$("#outer-circle").css({'border':slide_amount+"px"+" "+"solid"});
	 	
		});
	});

</script>
<div>
	<div id="slider_container">
		<input id="slider" type="range" min="0" max="200" step="5" value="50" />
	</div>
 <div id="range">50</div>
</div>
<div id="outer-circle">
</div>
</html>