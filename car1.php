<!DOCTYPE html>
<html>
<body>
	<?php 
		$num=4;
                     $car=array("BMW","Benz","Volvo","Saab","Audi","Ford","Chevrolet","Honda",
                             "Toyoto","Isuzu","Nissan","Mitsubishi","Mazda");
		$i=0;
		$n=count($car);
		echo "<ul style='list-style-type: circle'>";
		while ($i<$n) {
			if ($i%$num==3) {
				echo "<li>$car[$i]</li>";}			
			$i++;}
		echo "</ul>";
		echo "<ol type='a'>";
		$i=0;

		do{
			if (strlen($car[$i])>=$num+2) {
				echo "<li>$car[$i]</li>";}
			$i++;
		}while ($i<$n); 
		echo "</ol>";
	?>
</body>
</html>
