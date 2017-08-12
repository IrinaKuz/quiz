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
    <h1>Legal Terms Quiz</h1>
 
	<form action="quiz_action.php" method="post">
        
        <h2>What is
          <?php print htmlspecialchars($terms2_1[0]['term'], ENT_QUOTES, 'UTF-8'); ?>?
        </h2>
        
        <div class="radioBtn">
        		<?php $randomNumArr = randomNumFunc();
        		for ($i = 0; $i < 3; $i++) { ?>
        			<label>
	        			<input type="radio" name="quiz1"
		    				value="<?php print $terms2_1[$randomNumArr[$i]]['id'] ?>" />
		    				<?php print htmlspecialchars($terms2_1[$randomNumArr[$i]]['def'], ENT_QUOTES, 'UTF-8');?> 
            		</label><br />
        		<?php } ?>
        		<input type="hidden" name ="correct_ans2_1" 
        				value=" <?php echo $terms2_1[0]['id'] ?>" />
        </div>   
            <h2>What is
          <?php echo htmlspecialchars($terms2_2[0]['term'], ENT_QUOTES, 'UTF-8'); ?>?
        </h2> 
       
       <div class="radioBtn">
        		<?php $randomNumArr = randomNumFunc();
				for ($i = 0; $i < 3; $i++) { ?>
        			<label>
	        			<input type="radio" name="quiz2"
		    				value="<?php print $terms2_2[$randomNumArr[$i]]['id'] ?>" />
		    				<?php print htmlspecialchars($terms2_2[$randomNumArr[$i]]['def'], ENT_QUOTES, 'UTF-8');?> <br />
            		</label>
        		<?php } ?>
        		<input type="hidden" name ="correct_ans2_2" 
        				value=" <?php echo $terms2_2[0]['id'] ?>" />
        </div>    
        
        <h2>What is
          <?php echo htmlspecialchars($terms2_3[0]['term'], ENT_QUOTES, 'UTF-8'); ?>?
        </h2>
        
        <div class="radioBtn">
        		<?php $randomNumArr = randomNumFunc();
        		for ($i = 0; $i < 3; $i++) { ?>
        			<label>
	        			<input type="radio" name="quiz3"
		    				value="<?php print $terms2_3[$randomNumArr[$i]]['id'] ?>" />
		    				<?php print htmlspecialchars($terms2_3[$randomNumArr[$i]]['def'], ENT_QUOTES, 'UTF-8');?> <br />
            		</label>
        		<?php } ?>
        		<input type="hidden" name ="correct_ans2_3" 
        				value=" <?php echo $terms2_3[0]['id'] ?>" />
         </div>   
         
         <h2>What is
          <?php echo htmlspecialchars($terms2_4[0]['term'], ENT_QUOTES, 'UTF-8'); ?>?
        </h2>
        
        <div class="radioBtn"> 
        		<?php $randomNumArr = randomNumFunc();
        		for ($i = 0; $i < 3; $i++) { ?>
        			<label>
	        			<input type="radio" name="quiz4"
		    				value="<?php print $terms2_4[$randomNumArr[$i]]['id'] ?>" />
		    				<?php print htmlspecialchars($terms2_4[$randomNumArr[$i]]['def'], ENT_QUOTES, 'UTF-8');?> <br />
            		</label>
        		<?php } ?>
        		<input type="hidden" name ="correct_ans2_4" 
        				value=" <?php echo $terms2_4[0]['id'] ?>" />
         </div>   
            
            <h2>What is
          		<?php echo htmlspecialchars($terms2_5[0]['term'], ENT_QUOTES, 'UTF-8'); ?>?
        	</h2>
        
        <div class="radioBtn"> 
        		<?php $randomNumArr = randomNumFunc();
        		for ($i = 0; $i < 3; $i++) { ?>
        			<label>
	        			<input type="radio" name="quiz5"
		    				value="<?php print $terms2_5[$randomNumArr[$i]]['id'] ?>" />
		    				<?php print htmlspecialchars($terms2_5[$randomNumArr[$i]]['def'], ENT_QUOTES, 'UTF-8');?> <br />
            		</label>
        		<?php } ?>
        		<input type="hidden" name ="correct_ans2_5" 
        				value=" <?php echo $terms2_5[0]['id'] ?>" />
          </div>
          
          <div><input type="submit" name="submit" value="Submit" id="submitBtn" /></div>
        </form>
        
  </body>
</html>
<?php
function randomNumFunc() {
	$numbers = range(0,2);
	shuffle($numbers);
	return $numbers;
}
?>