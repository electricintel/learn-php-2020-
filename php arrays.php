<?php 
echo 'there are 3 types of arrays, indexed arrays, associative arrays and multi-dimensional arrays ';
?>
<!DOCTYPE html>
<html>
<head>
	<title>arrays</title>
</head>
<body><br><a href="index.php">Home</a><br>
<a href="https://www.php.net/manual/en/language.types.array.php">click here for php.net documentation of arrays</a>
<br><br>//INDEXED ARRAYS<br><br>
//arrays are indicated in php by square bracket confines [] or by a variable, followed by = , followed by the array function (no space) and the strings inside parenthesis confines<br>
//array functions within confines need quotation confines, followed by a comma, then seperated by a space<br>
//An array in PHP is actually an ordered map<br><br>
example:<br>
< ?php<br>
$array_indicator = ['a', 'b', 'c'];<br>
//or $array_indicator = array('a', 'b', 'c');<br>
//below is an example to call the first string<br>
echo $array_indicator[0];
//below is an example to call the last string<br>
echo $array_indicator[2];
//to try this code, type everything from the line containing < ?php (remove the space between the < and ?php), to ?> (below) into a document file and save it as a php file (*.php - replace the * with the name you would like to call the file)
?><br><br>
//echo $array_indicator; will not display the string but will display the error "Notice: Array to string conversion in (the path to the php file) on line (the line number of whe echo array variable... Array"<br>
//the print readable funtion, print_r with no space and the variable within parenthesis confines will show the string of the array as in the example below:<br>
< ?php<br>
$array_indicator = array('a', 'b', 'c');<br>
print_r($array_indicator);<br>
?><br>
//the exmple below shows how to change the string c to d when the array is called on in the resulting html file:<br>
< ?php<br>
$array_indicator = array('a', 'b', 'c');<br>
$array_indicator[2] = d;<br>
print_r($array_indicator);<br>
?><br>
<br>
//the example below shows how to add the string d to the current array string (a b c) when the array is called on in the resulting html file:<br>
< ?php<br>
$array_indicator = array('a', 'b', 'c');<br>
$array_indicator[] = 'd';<br>
//the array_push() function does the same:
array_push($array_indicator, 'e')
print_r($array_indicator);<br>
//if no quote confines are used on the constant, also known as character (d) in the string to push, the html file displays a warning assuming the quotation confines around the string to be displayed and displays the desired result below the warning<br>
?><br><br>
//the count function is used to count how many strings are in the final array<br>
//below is an example:<br> 
< ?php<br>
$array_indicator = array('a', 'b', 'c');<br>
$array_indicator[] = 'd';<br>
//the array_push() function does the same:<br>
array_push($array_indicator, 'e');<br>
//print_r($array_indicator);<br>
//if no quote confines are used on the constant, also known as character (d) in the string to push, the html file displays a warning assuming the quotation confines around the string to be displayed and displays the desired result below the warning<br><br>
echo count($array_indicator);<br>
//the echo function, a space, the count function, then the variable confined within parenthesis, finalized by the semicolon will display the php result of the final number of strings from the array (with the array_push and other added strings) in an html browser<br> 
echo count($array_indicator);<br><br>
//the array_merge function can merge multiple arrays into a new array.<br>
//example below:<br>
< ?php<br>
$a = [0, 1, 2, 3];<br>
$b = [4, 5, 6, 7];<br>
$c = array_merge($a, $b);<br>
print_r($c);<br>
?><br><br><br>
<br><br>//ASSOCIATIVE ARRAYS (key $ value string pairs or "sets")<br><br>
//associative arrays are written in php as a variable followed by square bracket confines and as many value and key sets as necessary, defined within square bracket confines<br>
or as the variable, the array function and then the necessary amount of value and key sets within parenthesis confines<br>

//in associative array set:<br>
 a variable, a space, an equals symbol a space, the opening square bracket, the key within single quote confines, a comma, a space, an equals symbol with a greater than symbol directly after the equals symbol with no space between, then a space, and then the value of the key, an immediate comma, a space and as many new value and key sets as necessary<br><br>

examples below:<br>
//an associative array without using the array function within php code (with a space between the less than and question symbols):<br>

< ?php //the beginning of the php file<br>
$a = ['b' => 'B', 'c' => 'C']; //the variable, the keys and the strings
print_r($a) //will display the full key and string readout of variable $a 
echo $a['c'] //will call the value of the key c<br><br><br>
//MULTI-DIMENSIONAL ARRAYS<br><br>
//the variable, square brackets wih mutiple sets of square brackets inside containing the indexed or associative arrays<br>
//multi-dimensional indexed arrays<br>
example below:<br> 
< ?php<br>
$variable = [['the', 'first', 'm-d', 'array', 'set'], ['next', 'is', 'second'], 
['now', 'as', 'many', 'more', 'sets', 'as', 'necessary']
];<br>
//to display the array sets to an html browser:<br>
print_r($variable)<br>
//to display a value or string from one of the arrays:<br>
print_r($variable[0][0]);<br>
//the above php sentence will display the first value from the first array within the multi-dimensional array"the" - the first value from the first array within the multi-dimensional indexed array<br>
?><br><br><br>
//muti-dimensional associated arrays<br>
//note- in sublimetext php editor, the cursor can be utilized in multiple places by pressing the ctrl key on the keyboard and left clicking the mouse, allowing allowing for multiple data entries at the same time.
//example:
< ?php
$variable = [['1' => 'the', '2' => 'first', '3' => 'm-d', '4' => 'array', '5' => 'set'], 
['1' => 'next', '2' => 'is', '3' => 'second'], 
['1' => 'now', '2' => 'as', '3' => 'many', '4' => 'more', '5' => 'sets', '6' => 'as', '7' => 'necessary']
];
//to print the array sets to the browser:
//print_r($variable)
//to display the first value from the first array:
print_r($variable[0]['1']);
// or use the eco function:
echo $variable[0]['1'];
?>

</body>
</html>
