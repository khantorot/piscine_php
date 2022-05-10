<?php
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK")
	{
		if (!file_exists('../private'))
            mkdir("../private");
        if (!file_exists('../private/passwd'))
			file_put_contents('../private/passwd');
		
		$acc = unserialize(file_get_contents('../private/passwd'));

		if ($acc) {
            $exist = 0;
            foreach ($acc as $k => $v)
                if ($v['login'] == $_POST['login'])
                    $exist = 1;
		}
		
        if (!$exist) {
			$acc[] = array(
				"login" => $_POST['login'],
				"passwd" => hash('whirlpool', $_POST["passwd"])
			);
			file_put_contents("../private/passwd", serialize($acc));
        	echo "OK\n";
        }else
			echo "ERROR\n";
	}else
		echo "ERROR\n";
?>