<html>
	<head>
		<meta charset='utf-8'>
		<title>Форма для ввода данных</title>
	</head>
	<body>
		
		<?php
			$a = (int)$_POST['param_A'];
			$b = (int)$_POST['param_B'];
			$c = (int)$_POST['param_C'];

			if (($a > 0) && ($b > 0) && ($c > 0)){
				$p = ($a + $b + $c)/2;
				echo "S = ".sqrt(($p * ($p - $a) * ($p - $b) * ($p - $c)));
			} else if (($a > 0) && ($b > 0)){
				echo "C = ".sqrt((pow($a, 2) + pow($b, 2)));
			} else if (($a > 0) && ($c > 0)){
				echo "B = ".sqrt((pow($c, 2) - pow($a, 2)));
			} else if (($b > 0) && ($c > 0)){
				echo "A = ".sqrt((pow($c, 2) - pow($b, 2)));
			} else {
				echo "Ошибка";
			}	
		?>
		
		<form method='post' action='form.html'>
			<input type='submit' value='Назад' />
		</form>
	</body>
</html>