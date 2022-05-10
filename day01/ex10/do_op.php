#!/usr/bin/env php
<?php
	if ($argc == 4)
	{
		$a = trim($argv[1]);
		$b = trim($argv[3]);
		
		switch (trim($argv[2]))
		{
			case "+" :
				$c = $a + $b;
				break;
			case "-" :
				$c = $a - $b;
				break;
			case "*" :
				$c = $a * $b;
				break;
			case "/" :
				$c = $a / $b;
				break;
			case "%" :
				$c = $a % $b;
				break;
			default :
				$c = "Incorrect Operator";
		}
	}
	else
		$c =  "Incorrect Parameters";
	echo $c ."\n";
?>