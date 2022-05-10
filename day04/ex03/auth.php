<?php
	function auth($login, $passwd)
	{
    	if (!$login || !$passwd)
            return false;
        $acc = unserialize(file_get_contents('../private/passwd'));
        if ($acc) {
            foreach ($acc as $k => $v) {
                if ($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd))
                    return true;
            }
        }
        return false;
	}
?>