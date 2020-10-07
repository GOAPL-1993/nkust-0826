<?php
$chi = 65;
$eng = 59;
$mat = 65;
$his = 93;
$total = $chi + $eng + $mat + $his;
$score = $total / 4;
echo "TOTAL:".$total."分<br>";
echo "AVERAGE:".$score."分<br>";
echo "你的等級是";
if ($score>=90){
	echo "A";
}
else if ($score>=80){
	echo "B";
}
else if ($score>=70){
	echo "C";
}
else if ($score>=60){
	echo "D";
}

else {
	echo "WTF!!";
}

?>