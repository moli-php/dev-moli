
<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
    <title>CSS3/jQuery Clock demo</title>
    <link rel="stylesheet" type="text/css" href="../../assets/libs/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/analogclock.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
    <script src="../../assets/libs/jquery-1.7.2.js"></script>   
    <script type="text/javascript">
    
        $(document).ready(function() {
         
              setInterval( function() {
              var seconds = new Date().getSeconds();
              var sdegree = seconds * 6;
              var srotate = "rotate(" + sdegree + "deg)";

              $("#sec").css({"-moz-transform" : srotate, "-webkit-transform" : srotate});
                  
              }, 1000 );
              
         
              setInterval( function() {
    
              var hours = new Date().getHours();
              var mins = new Date().getMinutes();
              var hdegree = hours * 30 + (mins / 2);
              var hrotate = "rotate(" + hdegree + "deg)";
              
              $("#hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
                  
              }, 1000 );
        
        
              setInterval( function() {
              var sec = new Date().getSeconds();
              var mins = new Date().getMinutes();
              var mdegree = mins * 6 + (10 * sec / 100);
              var mrotate = "rotate(" + mdegree + "deg)";
              
              $("#min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
                  
              }, 1000 );
         
        }); 
    </script>
</head>
<body>
<div class="container">
<h4 style="text-align:center">Analog Clock</h4>
	<ul id="clock">	
	   	<li id="sec"></li>
	   	<li id="hour"></li>
		<li id="min"></li>
	</ul>
</div>
</body>
</html>