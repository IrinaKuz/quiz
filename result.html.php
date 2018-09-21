	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Legal Terms Quiz</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="content-type"
        content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css' />
  </head>
  <body>


	<h1>Legal Terms Quiz</h1>
	<div>
		<p> Result:</p>
		<p><?php echo $total_ans ?> out of 10</p>
		<p><?php echo (int)($total_ans/10*100) ?>%</p>
	</div>	
	
	<form action="check_ans.php">
		<div>
    		<input type="submit" value="Check Your Answers" id="submitBtn" />
    	</div>
	</form>
	
	<form action="index.php">
		<div>
    		<input type="submit" value="Try Again" id="submitBtn" />
    	</div>
	</form>
	


</body>
</html>