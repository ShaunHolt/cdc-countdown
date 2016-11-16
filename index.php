<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CDC Countdown</title>
	<link rel="stylesheet" href="node_modules/kbw-datepick/dist/css/jquery.datepick.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="files/scss/main.css">
</head>
<body>
<div id="controls" class="row">
	<div class="col-md-6 col-md-offset-3">
	<form id="myform" class="form-inline">
	    <select id="fs" class="form-control"> 
	        <option value="+">Tipografia</option>
	        <option value="Arial">Arial</option>
	        <option value="Verdana ">Verdana </option>
	        <option value="Impact ">Impact </option>
	        <option value="Comic Sans MS">Comic Sans MS</option>
	    </select>

		<select id="size" class="form-control">
			<option value="">Tamaño</option>
			<option value="1">1</option>
			<option value="1.5">1.5</option>
			<option value="2">2</option>
			<option value="2.5">2.5</option>
			<option value="3">3</option>
			<option value="3.5">3.5</option>
			<option value="4">4</option>
			<option value="4.5">4.5</option>
			<option value="5">5</option>
			<option value="5.5">5.5</option>
		</select>
		<button class="btn btn-primary"><em class="glyphicon glyphicon-text-size"></em></button>

			<input type="text" id="select-fecha" placeholder="Seleccionar fecha" class="form-control">
		</form>
	</div>
</div>
	<div id="wrap">	
		<div id="clock"></div>
	</div>



<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="node_modules/kbw-datepick/dist/js/jquery.plugin.js"></script>
<script src="node_modules/kbw-datepick/dist/js/jquery.datepick.js"></script>

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

  $('#select-fecha').datepick({
  	dateFormat: 'yyyy/mm/dd',
  	showTrigger: '<button type="button" class="btn btn-primary"><em class="glyphicon glyphicon-calendar"></em></button>'
  });

  $("#fs").change(function() {
    $('#clock').css("font-family", $(this).val());
});

$("#size").change(function() {
    $('#clock').css("font-size", $(this).val() + "em");
});
</script>

</body>
</html>