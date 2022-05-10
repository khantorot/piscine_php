#!/usr/bin/env php
<?php
	if ($argc == 2)
	{	
		$cl = str_replace(" ", "", $argv[1]);
		$a = intval($cl);
		$b = substr(substr($cl, strlen((string)$a)), 1);
		
		if (!is_numeric($a) || !is_numeric($b)){
			$c = "Syntax Error";
		}
		
		switch (substr(substr($cl, strlen((string)$a)), 0, 1)) {
			case "*" :
				$c = $a * $b;
				break;
			case "+" :
				$c = $a + $b;
				break;
			case "-" :
				$c = $a - $b;
				break;
			case "/" :
				$c = $a / $b;
				break;
			case "%" :
				$c = $a % $b;
				break;
			default:
				$c = "Syntax Error";
		}
	}
	else
		$c = "Incorrect Parameters";
	echo $c. "\n";
?>