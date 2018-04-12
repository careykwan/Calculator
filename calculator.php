<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$userRadius = $_POST["radiusPop"];
$squareSide = $_POST["width"];
$rectangleLength = $_POST["length"];

}

$timeDisplay = $_POST["timezone"];
$fullday = date("l");
$date = date("F jS, Y ");
date_default_timezone_set('Etc/GMT+12');
$time = date("g:i a");


if ($time >= 5 && $time <= 11.59) {
	echo "Good Evening <br>";

}elseif ($time >= 12.01 && $time <= 11.30) {
	echo "Good Morning <br>";

}elseif ($time >= 11.31 && $time <= 4.59) {
	echo "Good Afternoon <br>";
	
}else {
	echo "Good Night <br>";
}

echo "It is " . $time;
echo ", $fullday";
echo ", $date <br>";

$areaCircle = 3.14 * $userRadius * $userRadius;
$diaCircle = $userRadius *2;
$circumferenceCircle = 2 * 3.14 * $userRadius;
$side =  $squareSide * $squareSide;
$perimeter = $squareSide * 4;
$areaRect = $squareSide * $rectangleLength;
$perimeterRect = 2 * ($rectangleLength + $squareSide);

if (!empty($_POST["shape"])) {
	foreach ($_POST["shape"] as $check) {	
	}

}else {
	echo "\n";
}

if ($check == "Circle") {
 	echo "<br> The Diameter of the Circle is $diaCircle <br>";
	echo "The Area of the Circle is $areaCircle <br>";
	echo "The Circumference of the Circle is $circumferenceCircle <br>";
	echo "<div class='render' style='border-radius:50%; height:{$userRadius}px; width:{$userRadius}px;'></div>";

}else if ($check == "Rectangle") {
	echo "<br> The Area of the Rectangle is $areaRect <br>";
	echo "The Perimeter of the Rectangle is $perimeterRect <br>";
	echo "<div class='render' style='width:{$rectangleLength}px; height:{$squareSide}px;'></div>";

}else if ($check == "Square") {
	echo "<br> The Area of the Sqaure is $side <br>";
	echo "The Perimeter of the Square is $perimeter <br>";
	echo "<div class='render' style='width:{$squareSide}px; height:{$squareSide}px;'></div>";
}

?>