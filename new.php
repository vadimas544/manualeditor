<html>
  <head>
    <title>Desenhando com jQuery</title>

<style>
.coord {
	opacity: 0.5;
	-webkit-transition: opacity .1s linear;
	-moz-transition: opacity .1s linear;
	-o-transition: opacity .1s linear;
	transition: opacity .1s linear;
	width: 100px;
	border: solid 1px black;
}
.mark {
	-webkit-transition: -webkit-transform .1s linear;
	-moz-transition: -moz-transform .1s ease-in-out;
	-o-transition: -o-transform .1s ease-in-out;
	transition: tranform .1s ease-in-out;
}
.focused-mark {
	-webkit-transform: scale(1.3);
	-moz-transform: scale(1.3);
	-o-transform: scale(1.3);
	transform: scale(1.3);
}
.focused-coord {
	opacity: 1;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
var count = 0;
	$(document).ready(function() {
		$(document).click(function(e) {
			count++;
			mark = $("<span>").css({
					'position':'absolute',
					'border':'solid 2px #cc00cc',
					'border-radius':'20px',
					'width':'17px',
					'height':'17px',
					top: e.pageY-10,
					left: e.pageX-10
			});
			
			$(mark).attr('id', "mark" + count);
			$(mark).addClass('mark');
			$(mark).css('display', 'none');
			$("div#marks").append(mark);
			$(mark).hover(mark_focus, mark_unfocus);
			$(mark).show('slow');
			
			
			coord = $("<li>" + e.pageX + " x " + e.pageY + "</li>");
			$(coord).attr('id', "coord" + count);
			$(coord).addClass('coord');
			$(coord).css('display', 'none');
			$(coord).hover(coord_focus, coord_unfocus);
			$("ol#coords").append(coord);			
			$(coord).show('slow');
			
		});
		
	});
	
	function coord_focus(e) {
		$(this).addClass('focused-coord');
		var id = $(this).attr('id');
		$("div#marks .mark#mark" + id.charAt( id.length-1 )).addClass('focused-mark');
	}
	
	function coord_unfocus(e) {
		$(this).removeClass('focused-coord');
		var id = $(this).attr('id');
		$("div#marks .mark#mark" + id.charAt( id.length-1 )).removeClass('focused-mark');
	}
		
	function mark_focus(e) {
		$(this).addClass('focused-mark');
		var id = $(this).attr('id');
		$("ol#coords .coord#coord" + id.charAt( id.length-1 )).addClass('focused-coord');
	}
	function mark_unfocus(e) {
		$(this).removeClass('focused-mark');
		var id = $(this).attr('id');
		$("ol#coords .coord#coord" + id.charAt( id.length-1 )).removeClass('focused-coord');
	}
	
	
</script>
  </head>

  <body>
	<div>Click!</div>
	<div id="marks"></div>
	<ol id="coords"></ol>
	

  </body>

</html>