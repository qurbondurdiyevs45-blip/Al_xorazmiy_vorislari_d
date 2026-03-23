<?php
class Car {
    public $model;
		public $color;
		public $probeg;
		public function drive() {
			echo "Mashinas harakatlanyapti";
		}
}
$cobalt = new Car();
$cobalt->model = "COBALT";
$cobalt->color = "red";
$cobalt->probeg = 2500;
print_r($cobalt);
echo "<br>";
var_dump($cobalt);
echo "<br>";
echo "Mashina modeli:" .$cobalt->model."<br>";
echo "Mashina rangi:" .$cobalt->color."<br>";
?>





?>