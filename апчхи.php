<?php
if(isset($_POST["cr"]))
{
	class Uravnenie
	{
		public $x;
		public $a;
		public $b;
		public $c;

		function __construct($x, $a, $b, $c)
		{
		$this->x = $x;
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		}

		function check_x()
		{
			if($this->x <= 3)
			{
				echo $this->x * $this->x - 3 * $this->x + 9 + "<br>";
			}
			else
			{
				echo $this->x * $this->x * $this->x + 6 + "<br>";
			}
		}
		function discriminant()
		{
			echo $this->a * $this->b * $this->c + "<br>";
		}
	}
	$x = $_POST["X"];
	$a = $_POST["A"];
	$b = $_POST["B"];
	$c = $_POST["C"];
	$Y = new Uravnenie($x, $a, $b, $c);
	$Y->check_x();
	$Y->discriminant();
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form method="post">
<input type="text" name="X">
<input type="text" name="A">
<input type="text" name="B">
<input type="text" name="C">
<input type="submit" name="cr">
</form>
</body>
</html>