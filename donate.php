<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<link rel="stylesheet" href="doc.css" type="text/css" media="all">
<link rel="stylesheet" href="news.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css">
<link rel="icon" type="image/png" href="doc.png">
<title>Drinkin Outa Cups</title>
 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['gauge']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['$', 100]
        ]);

        var options = {
          width: 500, height: 220,
          greenFrom: 150, greenTo: 200,
          redFrom: 65, redTo: 100,
          yellowFrom:100, yellowTo: 150,
          max: 200,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>

<body>

<div id="bg">
</div>

<div id="title">
	<h1><img style="height:100px;"src="doc.png"></h1>
</div>
<div id="main">


	<div id="menu">
	<?php include 'menu.php'; ?>
	</div>
	
	<div id="news">
	<h1>Donations</h1>
	<br /><hr />
	As a disclaimer, donating to our server does <b style="color: black">NOT</b> protect you from the <a href="rules.php">rules</a>. Donate to the server to keep it alive! We will eventually add donator benefits when we can.
	<br /><br />If you are considering donating and would like to be added to the Donator board, please PM Xianith on the forums with your IGN and the Email you used to donate with.
	<hr />
	<center>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
	">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>
	<hr />
	<div id='chart_div'></div>
	<b style="color: red; text-shadow: -1px -1px black">Red</b> = Monthly Payment (65$)
	<br /><b style="color: orange; text-shadow: -1px -1px black">Orange</b> = Server Upgrade (will increase monthly payment)
	<br /><b style="color: green; text-shadow: -1px -1px black">Green</b> = Overflow (which will go back into the server when needed)</center>
	</div>

	<div id="news">
	<h1>Donators</h1>
	<br /><hr />
	JoeyDayMule
	<br />Bill
	</div>
	
</div>
	
<!--<div id="side">
	<div id="sidemain">
		Something will show here!
	</div>
</div>

<br />

<div id="createdby">Created By <a href="http://xianith.com">Xianith</a>-->
</div>
</body>
</html>