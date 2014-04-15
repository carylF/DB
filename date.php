<?php

function calendar(){
//make the months array
$months = array (1 =>'January', 2 => 'Febuary',3=>'March',4 =>'April',5=>'May',6=>'June',7=>'July',8=>'August',9=>'September',10 =>'October',11=>'November',12=>'December');

//making the days and years
$days =range (1,31);
$years = range(1950, 2018);


//make the new pull down menu

echo '<select name="month"> <option value="--">Month</option>';
	foreach($months as $key => $value){
		echo "<option value=\"$key\">$value</option>\n";
		}
echo '</select>';

//creating day and year drop downs

echo '<select name="day"><option value="--">Day</option>';
foreach ($days as $value){
	echo "<option value=\"$value\">$value</option> \n";
	}
	echo '</select>';

//years

echo '<select name="year"><option value="----">Year</option>';
foreach($years as $year){
	echo "<option value=\"$year\">$year</option>\n";
	}
echo '</select>';
}
?>