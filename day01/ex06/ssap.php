#!/usr/bin/env php
<?php
	if($argc > 1)
	{
		$mass = array();

		for ($i = 1; $i < count($argv); $i++) 
		{
			$tmp = array_filter(explode(' ', $argv[$i]));
			foreach ($tmp as $elem)
				$mass[] = $elem;
		}

		sort($mass);
		foreach ($mass as $elem)
			echo $elem."\n";
	}
?>