<?php
$h = 1.65;
$w = 30;
echo "身高:",$h,"公尺<br>";
echo "體重:".$w."公斤<br>";
$bmi = $w/$h**2;
echo "BMI:".$bmi."<br>";
if ($bmi>24){
	echo "fat!!";
}
else if ($bmi>=18.5){
	echo "great!!";
}
else {
	echo "skinny!!";
}
echo "<br>";
echo "<br>";
echo "$h<br>";
echo '$h';
?>