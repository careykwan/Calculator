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
	echo "<br> The radius of the circle is $userRadius. <br>";
 	echo "The Diameter of the Circle is $diaCircle, this is caluculated by 2 x radius. <br>";
	echo "The Area of the Circle is $areaCircle, this is calculated by 3.14 x radius x radius.<br>";
	echo "The Circumference of the Circle is $circumferenceCircle, this is calculated by 2 x 3.14 x radius.<br>";
	echo "<div class='render' style='border-radius:50%; height:{$userRadius}px; width:{$userRadius}px;'></div>";

}else if ($check == "Rectangle") {
	echo "<br> The length of the rectangle is $rectangleLength and the height is $squareSide. <br>";
	echo "The Area of the Rectangle is $areaRect, this is calculated by the height x length. <br>";
	echo "The Perimeter of the Rectangle is $perimeterRect, this is calculated by 2 x (length + height).<br>";
	echo "<div class='render' style='width:{$rectangleLength}px; height:{$squareSide}px;'></div>";

}else if ($check == "Square") {
	echo "<br> The sides of the sqaure are $squareSide.<br>";
	echo "The Area of the Sqaure is $side, this is calculated by side x side.<br>";
	echo "The Perimeter of the Square is $perimeter, this is calculated by 4 x side. <br>";
	echo "<div class='render' style='width:{$squareSide}px; height:{$squareSide}px;'></div>";
}

?>