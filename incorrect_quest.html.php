<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Legal Terms Quiz</title>
    <meta http-equiv="content-type"
        content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css' />
  </head>
  <body>
  <ol>
	  <?php for ($i = 0; $i < count($ans); $i++) {?>
	  <li>
			<p><b>You answered incorrectly to:</b></p>
			<p><b><?php echo $ans[$i]['term']?></b>
			</p> 
			<p>The correct answer is</p>
			<p><?php echo $ans[$i]['def']?>
			</p> 
	 </li>
	 <hr />
		<?php } ?>
	</ol>

	<form action="index.php">
		<div>
    		<input type="submit" value="Try Again" id="submitBtn" />
    	</div>
	</form>
</body>
</html>