<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="files/scss/main.css">
</head>
<body>
	<div id="wrap">	
		<span id="clock"></span>
		<br>
		
	</div>



<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/jquery-countdown/dist/jquery.countdown.min.js"></script>

<script type="text/javascript">
  $('#clock').countdown('<?php echo $_GET['fecha']; ?>', function(event) {
    $(this).html(event.strftime(
    	''
    // + '<span>%w</span> semanas '
    + '<span>%d</span> dias '
    + '<span>%H</span> horas '
    + '<span>%M</span> minutos '
    + '<span>%S</span> segundos'
    ));
  });
</script>

</body>
</html>