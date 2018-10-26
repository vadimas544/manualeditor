<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/jquery-ui.css">
    <script src="js/jquery-3.1.0.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
        $(init);
        function init(){
            var diagram = [];
            $("#rect").draggable({
              /*
               helper: function() {
                return $(this).clone().appendTo('#circle').css({
                'zIndex': 5
            });
            },
            */
            helper: 'original',
             /* function() {
              return $(this).clone().appendTo( "#circle" );
            },
            */
            cursor: 'move',
            tolerance: 'fit'
            //revert: true
        }); 
            $("#circle").droppable({
                drop: function(event, ui){
                      /*alert("droped"); 
                      var node = {
                        _id: (new Date).getTime()
                      };
                      diagram.push(node);
                      console.log(diagram);
                      */
                      $('#rect').append(ui.draggable);
                       //alert("droped");
                }
            });   
        }
    </script>
    <style type="text/css">
        #circle {
            margin: 0 auto;
            border: 15px solid #000;
           background: #fff;
           border-radius: 50%;
           height: 400px;
           width: 400px;
           z-index: 2;

         }
        
        #rect {
          /*position: absolute;*/
          display: inline-block;
          margin: 20px auto;
          width: 200px;
          height: 100px;
          background: red;
          white-space: nowrap;
          z-index: 1;
          
    }
    .blocks{
        border: 1px solid #000;
        height: 400px;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 blocks">
               <div class="text-center">
                   <div id="circle">
                       
                   </div>
               </div> 
            </div>
            <div class="col-lg-6 blocks">
                <div class="text-center">
                   <div id="rect">
                       
                   </div>
               </div> 
            </div>
        </div>
    </div>
</body>
</html>