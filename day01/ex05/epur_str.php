#!/usr/bin/env php
<?php
	if ($argc == 2)
	{
		$tmp = preg_replace('/\s\s+/', ' ', $argv[1]);
		$str = trim($tmp);
		echo $str."\n";
	}
?>