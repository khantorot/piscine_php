#!/usr/bin/env php
<?php
	function ft_split ($str)
	{
		$res = array_filter(explode(' ', $str));
		sort($res);
		return $res;
	}
?>