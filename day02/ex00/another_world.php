#!/usr/bin/env php
<?php
	$str = trim(preg_replace('/\s\s+/', ' ', $argv[1]));
	if ($str)
		echo $str. "\n";
?>