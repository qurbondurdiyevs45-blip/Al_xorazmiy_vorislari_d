<?php
class Car {
	public $model;
	public const BRAND = "Chevrolet";
	public function info() {
		return "Bu ". self::BRAND." mashinasi!<br>";
	  }
}
$onix = new Car();
echo $onix->info();
echo $onix::BRAND."<br>";

echo Car::BRAND;
?>