
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Salimeh Safi PHP Practice</title>
	<link rel="icon" href="http://ssafi.com/asset/ico/Heart.ico">
	<link href="https://fonts.googleapis.com/css?family=Aleo|Caveat+Brush|Open+Sans" rel="stylesheet">
</head>
<body>
	<!-- <a class="skip-main" href="#main">Skip to main content</a> -->
 
	<!-- // Into -->
	<header>
		<h1>PHP</h1>
		<?php
		// Comments
		echo "<h2>Comments in php</h2>";
		echo "3 Versions";
		echo "// Comments version 1" . "<br />" . "/* Comments version 2 */" . "<br />" . "# Comments vaersion 3" . "<br />". "<br />";
		?>
	
		<?php 
		// Variables 
			echo "<h2>Variables in php</h2>";
			echo "Hi Sali." . " How u doing today?"; ?><br />
			<?= "Is it 2 + 2 = " . 5 . "<br />" . "<br />"; ?>

		<?php 
		// Strings  
			echo "<h2>Strings in php</h2>";
			echo "Variables" . "<br / >";
			$var1 = 22;
			echo "\$var1 is = " . $var1 . "<br / >";
			
			$var1 = "Beautiful day!";
			echo "Now \$var1 changes to = " . $var1 . "<br / >";
			
			echo "<h3>Concatenating Strings</h3>";
			$greeting = "Welcome to";
			$name = "SSAFI.com";
			echo $greeting . " " .$name . "<br />" . "<br />";	

			$phrase = $greeting . " " . $name;
			echo "Notes: Using <strong>double quote for strings</strong> \$phrase must be escaped using '\' back slash and the value is <<<  $phrase  >>> " . "<br / >";
			echo 'Notes: Using <strong>single quote for strings</strong> instead $phrase is not going to be evaluated to its value instead the literal string is going to be printed <<<  $phrase  >>> <br / >';
		?>


		<!--  Strings functions -->
		<h3>String Functions</h3>
		<?php 			
			echo "<h4>String Concatenation using ' . ' Operator</h4>";
			$first = "The quick brown fox";
			$second = " jumped over the lazy dog which was tired.";
			
			$third = $first;
			echo $third .= $second;
				
			echo "<h4>String Capitalizations</h4>";
		?>	
		<strong>Lowercase - strtolower($third): </strong><?php echo strtolower($third); ?><br /><br />
		<strong>Uppercase - strtoupper($third): </strong><?php echo strtoupper($third); ?><br /><br />
		<strong>Uppercase first world - ucfirst($third): </strong><?php echo ucfirst($third); ?><br /><br />
		<strong>Uppercase Words - ucwords($third): </strong><?php echo ucwords($third); ?><br /><br /><br />
		
		<strong>Length - strlen($third): </strong><?php echo strlen($third); ?><br /><br />
		<strong>Trim - trim("   A   " ): </strong><?php echo trim("   A   " ); ?><br /><br />
		<strong>Find - strstr($third, "dog"): </strong><?php echo strstr($third, "dog"); ?>
		<p>strstr() returns anything after the found string as well...</p>
		<strong>Replace by a new string - str_replace("dog", "CAT", $third): </strong><?php echo str_replace("dog", "CAT", $third) ?><br /><br />
		
		<strong>Repeat - str_repeat($third, 2): </strong><?php echo str_repeat($third, 2); ?><br /><br />
		<strong>Substring - substr($third, 10, 5): </strong><?php echo substr($third, 10, 5); ?><br /><br />
		<strong>Find position - strpos($third, "brown"): </strong><?php echo strpos($third, "brown"); ?><br /><br />
		<strong>Find character - strchr($third, "q"): </strong><?php echo strchr($third, "q"); ?>
		<p>strchr() returns anything after the found character as well...</p><br /> 
		
				
		<h3>Mixing Numbers and Strings</h3>
		<strong>7 + "2" = </strong><?php echo 7 + "2";  ?><br /> 
		<strong>7 + "2 house" = ERROR </strong><?php // echo 7 + "2 house";  ?><br /> 
				
		<?php 
		// Integers  
			echo "<h2>Integers</h2>";
			
			$var1 = 3;
			$var2 = 5;
		?>
		<strong>Basic math: 'echo  ((1 + 2 + $var1) * $var2) / 2 - 5 = '</strong> <?php echo  ((1 + 2 + $var1) * $var2) / 2 - 5 ; ?><br /><br />
		 
		<!-- Integers functions -->
		<h3>Integers Functions</h3>					
		<strong>Absolute value - abs(0-300): </strong><?php echo abs(0-300); ?><br /><br />
		<strong>Exponential - pow(2, 8): </strong><?php echo pow(2, 8); ?><br /><br />
		<strong>Square root - sqrt(100): </strong><?php echo sqrt(100); ?><br /><br />
		<strong>Modulo - fmod(25, 3): </strong><?php echo fmod(25, 3); ?><br /><br />
		<strong>Random - rand(): </strong><?php echo rand(); ?>
		<p>rand() gives a hug number and its better to use min and max for it</p> 
		<strong>Random(min, max) - rand(20, 50): </strong><?php echo rand(20, 50); ?><br /><br />
		
		<?= "When \$var1 = 3"; ?><br /><br /> 
		<strong>Post Increment $var1++ = </strong><?php $var1 = 3; echo $var1++; ?><br />
		<strong>Pre Increment ++$var1 = </strong><?php $var1 = 3; echo ++$var1; ?><br />
		<strong>Post Decrement $var1-- = </strong><?php $var1 = 3; echo $var1--; ?><br />
		<strong>Pre Decrement --$var1 = </strong><?php $var1 = 3; echo --$var1; ?><br />
		
		<?= "When \$var2 = 5"; ?><br /><br /> 
		<strong>+= : 5 + 4 = </strong><?php $var2 = 5; echo $var2 += 4; ?><br />
		<strong>-= : 5 - 4 = </strong><?php $var2 = 5; echo $var2 -= 4; ?><br />
		<strong>*= : 5 * 4 = </strong><?php $var2 = 5; echo $var2 *= 4; ?><br />
		<strong>/= : 5 / 4 = </strong><?php $var2 = 5; echo $var2 /= 4; ?><br />
		<strong>%= : 5 % 4 = </strong><?php $var2 = 5; echo $var2 %= 4; ?><br /><br /> 
		
		 
		 <?php 
		// Float Numbers  
			echo "<h2>Float or Decimal Numbers</h2>";
			
			$var1 = 3.3;
			$var2 = 5.7;
		?>
		<strong>Basic float number math: 'echo  ((1 + 2 + $var1) * $var2) / 2 - 5 = '</strong> <?php echo  ((1 + 2 + $var1) * $var2) / 2 - 5 ; ?><br /><br />
		
		<?= "When \$var1 = 3.3"; ?><br /><br /> 
		<strong>+= : 3.3 + 4 = </strong><?php $var1 = 3.3; echo $var1 += 4; ?><br />
		<strong>-= : 3.3 - 4 = </strong><?php $var1 = 3.3; echo $var1 -= 4; ?><br />
		<strong>*= : 3.3 * 4 = </strong><?php $var1 = 3.3; echo $var1 *= 4; ?><br />
		<strong>/= : 3.3 / 4 = </strong><?php $var1 = 3.3; echo $var1 /= 4; ?><br />
		<strong>%= : 3.3 % 4 = </strong><?php $var1 = 3.3; echo $var1 %= 4; ?><br /><br />
		 
		<!-- Float functions -->
		<h3>Float Functions</h3>
		<?= "When \$float = 85.3567"; ?><br /><br /> 
		<strong>Round - round($float, 10) = </strong><?php $float = 85.3567; $var1 = 3; echo round($float, 10); ?><br /> 
		<strong>Ceiling - ceil($float) = </strong><?php $float = 85.3567; echo ceil($float); ?><br /> 
		<strong>Floor - floor($float) = </strong><?php $float = 85.3567; echo floor($float); ?><br /><br />  
		

		<!-- Type Check -->
		<h4>Type Check</h4>
		<?= "When \$float = 3.3 and \$integer = 6"; ?><br /><br /> 
		<strong>Is It an Integer - is_int($integer) = </strong><?php $integer = 6; echo is_int($integer) ?><br /> 
		<strong>Is It an Integer - is_int($float) = </strong><?php $float = 3.3; echo is_int($float) ?><br /><br />  
		
		<strong>Is It a Float - is_float($integer) = </strong><?php $integer = 6; echo is_float($integer) ?><br /> 
		<strong>Is It a Float - is_float($float) = </strong><?php $float = 3.3; echo is_float($float) ?><br /><br /> 
		
		<strong>Is It a Number - is_numeric($integer) = </strong><?php $integer = 6; echo is_numeric($integer) ?><br /> 
		<strong>Is It a Number - is_numeric($float) = </strong><?php $float = 3.3; echo is_numeric($float) ?><br /><br /> 
		
		<?php 
		// Arrays  
			echo "<h2>Arrays in php</h2>";
			echo "An ordered, integer-indexed collection of objects - similar to expandable foleders - preset/fixed order";
			
			echo "To defines arrays we have 2 options. 1-  array(4, 5, 65, 8). 2- [4, 5, 65, 8]. <br /><br /><br />";
			
			echo 'When $number = array(4, 5, 65, 8);';
			$number = array(4, 5, 65, 8);
			echo "<pre>";

			print_r($number);
			echo "</pre>";
			echo "<br />";
 
			echo 'When $number = array(4, 5, array(1,5, 4,3), 8))';
			$number = array(4, 5, array(1,5, 4,3), 8);
			echo "<pre>";
			print_r($number);
			echo "</pre>";
			echo "<br />";
			
			echo 'When $mixed = array(6, "fox", "dog", 53.215, array("door", 8.23, 4))';
			$mixed = array(6, "fox", "dog", 53.215, array("door", 8.23, 4));
			echo "<pre>";
			print_r($mixed);
			echo "</pre>";
			echo "<br /><br />";

			
			echo 'Note: echo does not work on arrays since it accept strings, not array; . <br />';
			echo 'echo $number; = ERROR - since $number is an array';
			echo "<br /><br />";
			
			echo 'echo only works on printing one element of the array';
			echo "<br />";
			echo 'echo $mixed[4][1] = ' . $mixed[4][1];
			echo "<br /><br />";
			
			echo "<h3>To add new items to the array</h3>";
			$mixed[6] = "mouse";
			echo '$mixed[6] = "mouse";';
			echo "<pre>";
			print_r($mixed);
			echo "</pre>";
			
			echo "<br /><br />";
			echo "From PHP 5.4 the array short-hand syntax has been added";
			echo "$new_array = [4, 5, 87, 9, 45, 5];";
			$new_array = [4, 5, 87, 9, 45, 5];
			echo "<pre>";
			print_r($new_array);
			echo "</pre>";
			echo 'Note: Gave me ERRORR. <br />';
			
			echo "<h3>Associative Arrays</h3>";
			echo "An object-indexed collection of objects - UNORDERED - hanging file folders - key and value based";
			echo "<br /><br />";
			
			echo '$associate = array("first_name" => "Salimeh", "last_name" => "Safi")';
			$associate = array("first_name" => "Salimeh", "last_name" => "Safi");
			echo "<br />";
			echo '$associate["first_name"]  . " " . $associate["last_name"] = ';
			echo $associate["first_name"] . " " . $associate["last_name"];
			echo "<br /><br />";
			echo 'Note: The number indexes do not work anymore<br />';
			echo $associate[0];
			echo "<br />";
			echo "echo \$associate[0]; - Gives ERROR - cause there is no more number indexes";
			echo "<br /><br /><br />";
			
			echo "<h3>Array Functions</h3>";
			echo "When \$numbers = array(8, 52, 74, 65, 2, 48, 98)";
			$numbers = array(8, 52, 74, 65, 2, 48, 98);
			echo "<br /><br />";	
			echo '<strong>Count - count($numbers) = </strong>';			
			echo count($numbers); 
			
			echo "<br /><br />";	
			echo '<strong>Max value - max($numbers) = </strong>';			
			echo max($numbers); 
			
			echo "<br /><br />";	
			echo '<strong>Min value - min($numbers) = </strong>';			
			echo min($numbers); 
			
			echo "<br /><br />";	
			echo '<strong>Sort - sort($numbers) = </strong>';
			echo "Before sorting the array";
			echo "<pre>";
			print_r($numbers);
			echo "</pre>";
			
			echo "<br />";	
			echo '<strong>Sort - sort($numbers) - replaces the array elements - Destructive function</strong><br />';
			echo "After sorting the array = ";
			// $numbers = sort($numbers);
			sort($numbers);
			echo "<pre>";
			print_r($numbers);
			echo "</pre>";
			
 			echo "<br />";	
			echo '<strong>Reverse sort - rsort($numbers) - replaces the array elements - Destructive function</strong><br />';
			echo "After reverse sorting the array = ";
			rsort($numbers);
			echo "<pre>";
			print_r($numbers);
			echo "</pre>";
			
			echo "<br />";	
			echo '<strong>Implode - implode("*", $numbers) - Does NOT replaces the array elements</strong><br />';
			$numbers = implode("*",$numbers);
			echo "Implode creates a string - no more array - echo \$numbers; work";
			echo "<pre>";
			echo "Implode creates a string = ";
			echo $numbers;
			echo "</pre>";
			
			echo "<br />";	
			echo '<strong>Explode - explode("*", $numbers) - Does NOT replaces the array elements</strong><br />';
			echo "<br />";
			echo "\$numbers before explode() = ";
			echo $numbers;
			$numbers = explode("*",$numbers);
			echo "<br />";
			echo "\$numbers after explode()";
			echo "<pre>";
			print_r($numbers);
			echo "</pre>";	

			echo "<br />";	
			echo '<strong>Is in the array - in_array(48, $numbers)</strong> = ';
			echo in_array(48, $numbers);
			echo "<br />";
			 
			echo "<br />";	
			echo '<strong>Is in the array - in_array(10, $numbers)</strong> = ';
			echo in_array(10, $numbers);
			echo "<br />";
			?><br />
			
			<?php
			// Booleans 
			echo "<h2>Booleans Data Type</h2>";
			echo "In PHP, booleans have only 2 values.";
			echo "<br />";
			echo "TRUE = true = True  AND FALSE = false = False";
			$flag = true;
			echo "When $flag = true;";
			echo "<br /><br />";	
			echo 'echo $flag = ';	
			echo $flag;		
			echo "<br />";
			
			echo 'echo !$flag = ';
			echo !$flag;
			echo "<br />";
			
			echo 'PHP converts a boolean TRUE to string " 1 "';	
			echo "<br />";
			echo 'PHP converts a boolean FALSE to string "  " - nothing - not even 0';	
			echo "<br /><br />";
			
			echo '<strong>Is a Boolean - is_bool()</strong>';
			echo "<br />";
			echo "is_bool($\flag) = ";
			echo is_bool($flag);
			echo "<br />";
			echo "is_bool(!\$flag) = ";
			echo is_bool(!$flag);
			echo "<br /><br />";
			echo 'is_bool() function returns "1" in both "true" or "false" values becuase only cares about the variable type and not the value';	
			echo "<br /><br />";
			
			$number3 = 3.14;
			echo "Example: when \$number3 = 3.14; ";
			echo "<br />";
			echo "if(is_float($number3)){";
			echo "<br />";
			echo 'echo "This is a number! = "';
			if(is_float($number3)){
				echo "This is a float!";
			}	
			echo "<br /><br />";
		    ?>
		
			<?php
				// NULL 
				echo "<h3>NULL - Lack of value</h3>";
				echo "In PHP, NULL = null = Null and empty";
				echo "<br />";
				echo 'When $variable1 = NULL;';
				echo "<br />";
				echo '$variable2 = ""; ';
				echo "<br />";
				echo '$variable3 = " ";';
				echo "<br />";
				echo '$variable4 = "0";' ;
				echo "<br />";
				echo '$variable5 = "0.0";' ;
				echo "<br />";
				echo '$variable6 = false;' ;
				echo "<br />";
				echo '$variable7 = array();' ;
				echo "<br />";
				echo '$variable8 = array(5);' ;
				$variable1 = NULL;
				$variable2 = "";
				$variable3 = " ";
				$variable4 = "0";
				$variable5 = "0.0";
				$variable6 = false;
				$variable7 = array();
				$variable8 = array(5);
				echo "<br /><br />";
				echo '<strong>Is a NULL - is_null()</strong>';
				echo "<br />";	
				echo 'is_null($variable1) = ' ;
				echo is_null($variable1);
				echo "<br />";	
				echo 'is_null($variable2) = ' ;
				echo is_null($variable2);
				echo "<br />";	
				echo 'is_null($variable3) = ' ;
				echo is_null($variable3);
				echo "<br />";	
				echo 'is_null($variable4) = ' ;
				echo is_null($variable4);
				echo "<br />";	
				echo 'is_null($variable5) = ' ;
				echo is_null($variable5);
				echo "<br />";	
				echo 'is_null($variable6) = ' ;
				echo is_null($variable6);
				echo "<br />";	
				echo 'is_null($variable7) = ' ;
				echo is_null($variable7);
				echo "<br />";	
				echo 'is_null($variable8) = ' ;
				echo is_null($variable8);
				echo "<br /><br />";	
				echo "Give ERROR because \$variable4 is unassigned - it is NULL but unset";
				echo "This simply shows that empty string is not NULL type" ;
				echo "<br /><br />";
			?>
				 
			<?php 
				// Is a variable Set
				echo "<strong>Is a variable Set - isset()</strong>";
				echo "<br />";	
				echo "isset(\$variable1) = " ;
				echo isset($variable1);
				echo "<br />";	
				echo 'isset($variable2) = ' ;
				echo isset($variable2);
				echo "<br />";	
				echo 'isset($variable3) = ' ;
				echo isset($variable3);
				echo "<br />";	
				echo 'isset($variable4) = ' ;
				echo isset($variable4);
				echo "<br />";	
				echo 'isset($variable5) = ' ;
				echo isset($variable5);
				echo "<br />";	
				echo 'isset($variable6) = ' ;
				echo isset($variable6);
				echo "<br />";	
				echo 'isset($variable7) = ' ;
				echo isset($variable7);
				echo "<br />";	
				echo 'isset($variable8) = ' ;
				echo isset($variable8);
				echo "<br /><br />";	
				echo 'Note: In php Empty: "", null, 0, 0.0, "0", false and array() are all considered empty';
				echo "<br /><br />";
				echo "Becuase \$variable1 and \$variable4 are UNSET. 'null' is lack of value therefore  = null does not mean has value";
				echo "<br /><br />";
			
				// Is a variable empty
				echo "<strong>Is a variable empty - empty()</strong>";
				echo "<br />";	
				echo "empty(\$variable1) = " ;
				echo empty($variable1);
				echo "<br />";	
				echo 'empty($variable2) = ' ;
				echo empty($variable2);
				echo "<br />";	
				echo 'empty($variable3) = ' ;
				echo empty($variable3);
				echo "<br />";	
				echo 'empty($variable4) = ' ;
				echo empty($variable4);
				echo "<br />";	
				echo 'empty($variable5) = ' ;
				echo empty($variable5);
				echo "<br />";	
				echo 'empty($variable6) = ' ;
				echo empty($variable6);
				echo "<br />";	
				echo 'empty($variable7) = ' ;
				echo empty($variable7);
				echo "<br />";	
				echo 'empty($variable8) = ' ;
				echo empty($variable8);
				echo "<br /><br />";	
				echo 'Note: an UN-nassigned variable is NOT Empty and NOT NULL';
				echo "<br /><br />";	
				echo 'Note- one more time : In php Empty: "", null, 0, 0.0, "0", false and array() are all considered empty';
				echo "<br /><br />";
			?>
			
			<?php 
				// Type juggling and type casting
				echo "<h2>Type juggling and type casting</h2>";
				echo "When PHP convrts variable types from a type to another type on its own"; 
				echo "<br />";
				echo "Such as converting a boolean to string or a string to an integer";
				echo "<br />";
				echo "<h3>Type Casting</h3>";
				echo "When we explicitly convert a variable type from a type to another - 2 ways"; 
				echo "<br /><br />";
				
				echo "<strong>1.  Set a variable's type - <<<<    settype(\$var, 'integer') >>>> - SET </strong>";
				echo "<br /><br />";
				echo "<strong>2.  Set a variable's type - <<<    (integer) \$var    >>>Type changes are temprory as the variable is being used</strong>";
				echo "<br /><br />";
				echo "<strong>Get a variable type - gettype(\$var)</strong>";
				echo "<br />";
				echo "\$var1 = '23'";
				echo "<br />";
				$var1 = '23';
				echo "echo gettype(\$var1) = ";
				echo gettype($var1);
				echo "<br /><br />";
				echo "\$var2 = 50";
				echo "<br />";
				$var2 = 50;
				echo "echo gettype(\$var2) = ";
				echo gettype($var2);
				echo "<br /><br />";
				echo "\$var3 = '45 houses'";
				echo "<br />";
				$var3 = '45 houses';
				echo "echo gettype(\$var3) = ";
				echo gettype($var3);
				echo "<br /><br />";
				echo "\$var4 = 45 . 'houses'";
				echo "<br />";
				$var4 = 45 . 'houses';
				echo "echo gettype(\$var4) = ";
				echo gettype($var4);
				echo "<br /><br />";
				echo "\$var3 = '45 houses' + 21";
				echo "<br />";
				$var5 = 21 + "45 houses";
				echo "<br />";
				echo "echo gettype(\$var5) = ";
				echo gettype($var5);
				echo "<br /><br />";
				echo "Gives ERROR - but must simply convert 45 from string to integer";
				echo "<br /><br />";
				
				echo "Example of type juggling";
				echo "<br /><br />";
				$test1 = 4;	
				$test2 = 4;	
				echo "echo \$test1 = 4; ";
				echo "<br />";
				echo "echo \$test2 = 4; ";
				echo "<br />";
				settype($test1, "string");
				(string)$test2;
				echo 'echo settype($test1, "string") = ';
				echo gettype($test1);
				echo "<br />";
				echo 'echo (string)$test2 = ';
				echo gettype($test2);
				echo "<br /><br />";
				echo "Note - (string)$test2 way of casting does not permanently changes the type of a variable";
				
				// Constants in php
				echo "<h3>Constants in PHP</h3>";
				echo "Unlike variables these container's values are fixed through out the code"; 
				echo "<br /><br />";
				echo "\$max_width = 980";
				$max_width = 980;
				echo "<br />";
				echo "<strong>define('MAX_WIDTH', 980);</strong>";
				echo "<br />";
				define('MAX_WIDTH', 980);
				echo "echo MAX_WIDTH = ";
				echo MAX_WIDTH;	
				echo "<br /><br />";
				echo "To check if we can change the constant";
				echo "<br />";
				echo "MAX_WIDTH += 2";	
				echo "<br /><br />";
				echo "Gives ERROR - can not change the value of a constant";
				echo "<br />";				
				echo "Can not even redefine a constant";					
				echo "<br />";
				echo "<strong>define('MAX_WIDTH', 2);</strong>";
				echo "<br />";
				// define('MAX_WIDTH', 2);
				echo "<br />";
				echo "Gives ERROR - can not redefine a constant";
			?>
			
			<?php 
				// Comparison and Logical Operators
				echo "<h2>Comparison and Logical Operators</h2>";
				echo "\$a = 4; <br /> \$b = 3;  <br /> \$c= 1; <br /> \$d = 20; <br />"; 
				echo "<br />";
				$a = 4;
				$b = 3;
				$c = 1;
				$d = 20;
				
				if(($a > $b) && ($c > $d)){
					echo '(($a > $b) && ($c > $d)) = TRUE';
					echo "<br />";
					echo "a larger than b AND c larger than d";
				}elseif(($a > $b) || ($c > $d)){
					echo '(($a > $b) || ($c > $d)) = TRUE';
					echo "<br />";
					echo "a larger than b or c larger than d";
				}else{
					echo "else never gonna run with these hard coded values";
				}		
				echo "<br /><br />";				
					
				echo "Such as converting a boolean to a string or a string to an integer";
				echo "<br /><br />";
				
				echo "*** - To check a form field value";
				echo "<br />";
				$quantity = null;
				if(empty($quantity) && !is_numeric($quantity)){
					echo 'if(empty($quantity) && !is_numeric($quantity)) = ';
					echo '"Please enter a value"';
				}
				echo "<br />";
				
				echo "<br /><br />";
			?>
			
			<hr />
			
			<?php 
				// For-each Loop
				echo "<h2>For-each Loop</h2>";
				echo "Takes an array and then loops through the array items to the end of array"; 
				echo "<br />";
				echo "foreach loop does not required to keep track of numbers of item in the loop";
				echo "<br />";
				echo "foreach loop - lines up the items in the array and goes through it until it gets to the end of the array";
				echo "<br /><br />";
				echo "<strong>foreach(\$array as \$value) {</strong>";
				echo "<br /><br />";
				$ages = array(4, 5, 7, 32, 6);
				echo '$ages = array(4, 5, 7, 32, 6);';
				echo "<br /><br />";
				echo 'foreach($ages as $age){';
				echo "<br />";
				echo 'Ages: {$age}';
				echo "<br />";
				echo '}';
				echo "<br /><br />";
				foreach($ages as $age){
					echo "Ages: {$age}"; 
				}
				echo "<br /><br />";
				
				// For-each Loop for associative arrays
				echo "<h3>For-each Loop for associative arrays</h3>";
				echo '<strong>foreach($array as $key => $value) { </strong>';
				echo "<br />";
				
				echo '<strong>*** - Example : </strong>';
				echo "<br />";
				echo '$person = array( <br />
					"first_name" => "Sali", <br />
					"last_name" => "Safi", <br />
					"address" => "190 Dudley ave", <br />
					"city" => "Thornhill", <br />
					"zip_code" => "L3t 2E9", <br />
					"country" => "Canada" <br />
				);';
				echo "<br /><br />";
				echo 'foreach($person as $att => $data){ <br />';
				echo '$att_nice = ucwords(str_replace("_", " ", $att)); <br />';
				echo 'echo "{$att_nice} : {$data};" <br /> <br />';
				echo "<br />";
				
				echo "The output is : ";
				echo "<br /><br />";
				
				$person = array(
					"first_name" => "Sali",
					"last_name" => "Safi",
					"address" => "190 Dudley ave",
					"city" => "Thornhill",
					"zip_code" => "L3t 2E9",
					"country" => "Canada"
				);
				foreach($person as $att => $data){
					$att_nice = ucwords(str_replace("_", " ", $att));
					echo "{$att_nice} : {$data}<br />";
				}
				
				// Get data out of asociative array 
				echo "<br /><br />";
				echo '<strong>*** Example : </strong>';
				echo "<br />";
				echo '$prices = array(<br />
							"Brand new computer" => 2000,<br />
							"1 month of Lynda.com" => 25,<br />
							"Learning PHP" => null<br />
						);';
				echo "<br /><br />";
				echo 'foreach($prices as $item => $price){ <br />
							echo "{$item}: ";<br />
							if(is_int($price)){<br />
							echo "$" . $price;<br />
						...);';
				echo "<br /><br />";
				$prices = array("Brand new computer" => 2000,
							"1 month of Lynda.com" => 25,
							"Learning PHP" => null
						);
						
				foreach($prices as $item => $price){
					echo "{$item}: ";
					if(is_int($price)){
						echo "$" . $price;
					}else{
						echo "Priceless";
						
					}
					echo "<br />";
				}
			?>

			<hr />
			
			<?php 
				// Continue 
				echo "<h2>Continue</h2>";
				echo "Continue is only used inside a loop. Continues skips the rest of the statments in the iteration 
				and directly goes to the loop's condition evaluation and starts a new loop. - like saying NEXT - done with this now continue/go to the next iteration."; 
				echo "<br />";
			
				for($count = 0; $count <= 10; $count++){
					if($count == 5){
						continue;
					}
					echo $count . "<br />";
				}
				echo "<br />";
				echo "There is no ' 5 '";
				echo "<br /><br />";
				echo '<strong>*** Example : </strong>';
				echo "<br />";
				for($count = 0; $count <= 10; $count++){
					if($count % 2 == 1){
						continue;
					}
					echo $count . ", ";
				}
				echo $count . "<br />";
				echo "Prints only even numbers";
				echo "<br /><br />";
				
				echo '<strong>*** Example : continue(1); and continue(2);</strong>';
				echo "<br />";
				for($i = 0; $i <= 10; $i++){
					if($i % 2 == 0){
						continue(1);
					}
					for($k = 0; $k <= 5; $k++){
						if($k == 3) {
							continue(2);
						}
					echo $i . "-" . $k . "<br />";
					}
				}
				echo $count . "<br />";
				echo "*** continue(1); - skips only one set of curly braces - Here it skips only even numbers ";
				echo "*** continue(2); - skips TWO sets of curly braces - it skips two set of curly braces";
				echo "<br /><br />";
				
			?>
			
			<?php 
				// Break 
				echo "<h2>Break</h2>";
				echo "Break stops the execution of a all the cases/processes - YOU've GOT THE JOB DONE, REST OF AUSITION IS DISMISSED - stop looping - stop searching and move on"; 
				echo "<br /><br />";
				echo "Similar to seaching for one special record in a pile of records. When we get/find that record, the search is done - JOB Completed."; 
				echo "<br />";
				
				for($count = 0; $count <= 10; $count++){
					if($count == 5){
						break;
					}
					echo $count . "<br />";
				}
				echo "<br />";
				echo "The execution ended completely by reaching ' 5 '";
				echo "<br /><br />";
				
				echo '<strong>*** Example : break(1); and break(2);</strong>';
				echo "<br />";
				for($i = 0; $i <= 10; $i++){
					if($i % 2 == 0){
						continue(1);
					}
					for($k = 0; $k <= 5; $k++){
						if($k == 3) {
							break(2);
						}
					echo $i . "-" . $k . "<br />";
					}
				}
 				echo "<br />";
				echo "*** break(2); - break out of TWO loops";
				echo "<br /><br />";
			?>
			
			<hr />
			
			<?php 
				// Array pointers - CURRENT($var) - next($var)
				echo "<h2>Array pointers</h2>"; 
				echo "PHP maintain a pointers to one of the items in an array - CURRENT POINTERS"; 
				echo "<br /><br />";
				
				echo '<strong>Current position of the pointer - current()</strong>';
				echo "<br /><br />";
				echo 'This is the array - $ages = array(4, 5, 8, 20, 14, 8);';
				$ages = array(4, 5, 8, 20, 14, 8);
				echo "<br /><br />";
				
				// Current pointer value
				echo '"Test 1: " . current($ages) = ';
				echo "<br /><br />";
				echo "Test 1 - first position: " . current($ages) . "<br />";
				echo "<br />";
				
				echo "Right now, the current position of the pointer is the first element in the array which has the value of ' 4 ' ";
				echo "<br /><br />";
				
				echo '<strong>Move the pointer to the next position of in the array manually - next()</strong>';
				echo "<br />";
				echo 'next($ages);';
				echo "<br /><br />";
				next($ages);
				echo "Test 2: - second position:" . current($ages) . "<br />";
				echo "<br />";
				echo 'next($ages);';
				echo "<br />";
				echo 'next($ages);';
				echo "<br />";
				next($ages);
				next($ages);
				echo "<br />";
				echo "Test 3 - forth position: " . current($ages) . "<br />";
				echo "<br /><br />";
				
				echo '<strong>Move the pointer to the previous position of in the array manually - prev()</strong>';
				echo "<br />";
				echo 'prev($ages);';
				prev($ages);
				echo "<br /><br />";
				echo "Test 4 - third position: " . current($ages) . "<br />";
				echo "<br />";
				next($ages);
				next($ages);
				next($ages);
				next($ages);
				next($ages);
				echo "<br />";
				echo "Test 5 - last element in the array: " . current($ages) . "<br />";
				echo "<br />";
				echo "By reaching to the last element in the array, next() function would return ' null ' and will not advanced anymore";
				echo "<br /><br />";
				?>
			
			<?php 
				// While Loop that moves the pointer
				echo "<h2>While Loop that moves the pointer - Good for Database</h2>"; 
				echo "Similar to foreach loop"; 
				echo "<br /><br />";
				while($age = current($ages)){
					echo $age . ", ";
					next($ages);
				}
				echo "<br />";
				echo 'while($age = current($ages)){';
				echo "<br />";
				echo 'The condition of the loop is not a comparison, instead it is an assignment operator'; 
				echo 'next() can not '; 
				?>
				
			<br /><br />
	</header>
</body>
</html>


























