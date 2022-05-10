#!/usr/bin/env php
<?php
	function ft_is_sort($tab)
	{
		$tmp = $tab;
		sort($tmp);
		for ($i = 0; $i < count($tmp); $i++)
		{
			if (strcmp($tmp[$i], $tab[$i]))
				return (false);
		}
		return (true);
	}
?>
