#!/usr/bin/env php
<?php
	if ($argc > 1)
	{
		$mass = array_filter(explode(' ', $argv[1]));
		$mass[count($mass)] = $mass[0];

		for ($i = 1; $i < count($mass); $i++)
			$res .=$mass[$i]." ";
		echo trim($res)."\n";
	}
?>