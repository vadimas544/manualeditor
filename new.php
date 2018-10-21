<html>
<style>
	 #outer-circle {
	border: 15px solid #000;
   background: #fff;
   border-radius: 50%;
   height: 500px;
   width: 500px;
   position: relative;
   /* 
    Child elements with absolute positioning will be 
    positioned relative to this div 
   */
 }
 #inner-circle {
   position: absolute;
   background: #000;
   border-radius: 50%;
   height: 50px;
   width: 50px;
   /*
    Put top edge and left edge in the center
   */
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
</html>
<div id="outer-circle">
  <div id="inner-circle">

  </div>
</div>