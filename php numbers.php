<?php echo "a whole number is known as an integer";
echo "a decimaled (fractioned ) number is known as a float";
//fun example:
//the Roman Year 72bc multilied by one Roman Calendar year, divided by one Babylonian year equals 73BC
//or
//72*365/360=73
//or
//72+1=73
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Math in php</title>
</head>
<body>
<a href="index.php">Click this to go back</a>

//basic mathematic operators (symbols) in php:<br>
 //multiply * (asterick)<br>
 //divide / (forward slash)<br>
 //add + (perpendicular cross)<br>
 //subtract - (dash)<br>
 //to the power of or exponent ** (double astericks- on a caculator, the symbol is an indices better known as a caret, ^ , indices means the plural of index)<br>
<br>a basic php mathmatical equation has two variables with integer strings (no quotes and with numbers, no letters)<br><br>
example:<br>
(to place the php code in the html page, place a space after the less than symbol, < , and before the question mark, ?)<br>
< ?php<br>
variable1   $radius = 25;<br>
variable2   $pi = 3.14;<br>
echo $pi * $radius**2;<br>
/><br><br>

//Order of operation  ( B I D M A S )<br>
//B brackets- execute calculations within brackets first<br>
//I indeces (exponents or to the power of) - execute indices second<br>
//D division - division third<br>
//M multiplication - fourth<br>
//A addition - fifth<br>
//S subtraction - 6th or last<br><br>

//increment and decrement operators<br>
//increase the value of an integer by the variable without adding a variable in php, use the plus sign to add to the integer. One plus sign added will add 0 to the integer.<br>
example:<br>
< ?php<br>
echo $radius++;<br>
//(the above will not add to the radius when displayed unless you reflect with another echo)<br>
echo $radius;<br>
//(now the html display will add the 2 radius variables. These will display one after the other in succession because the php has not been told to stack them one on top of the other)<br>
?><br>
//to decrease the integer by variable in php, change the ++ to --<br><br>

//longhand operators and shorthand operators are the same equations, but shorthand takes shorter to type and compute<br>
php longhand example:<br>

< ?php<br>
$age = 20;<br>
echo $age = $age + 10;<br>
//or<br>
$age + 10;
echo = age
?><br>
//the above php script will produce an html page that will add 10 to 20<br><br>

php shorthand example of the above equation:<br>
< ?php<br>
$age = 20;<br>
echo $age += 10;<br>
//or<br>
$age += 10;<br>
echo $age
?><br>

//(longhand operation: $age = $age +10; echo $age) = (shorthand operation echo $age += 10)<br>
<br>
//a few php number functions<br>
the floor function drops a fractioned or decimaled integer string to the lowest whole integer<br>
example of the floor function in a php document or file:<br>
< ?php<br>
$pi = 3.14;<br>
echo floor($pi);<br>
//the above php code will display 3 (the floor number of 3.14) if in a php document and the space removed from between the < and ?php characters<br>
?><br><br><br>
the ceil function adds to the fractioned or decimaled integer string to the next whole integer<br>
example of the ceil function in a php document or file:<br>
< ?php<br>
$pi = 3.14;<br>
echo ceil($pi);<br>
//the above php code will display 4 (the ceil number of 3.14) if in a php document and the space removed from between the < and ?php characters<br>
?><br><br><br>
//the pi function in use will display the php definition integer float of pi when called with echo without integers within the open and closed parenthesis which are placed after the function<br>
pi function example:<br>
< ?php<br>
echo pi()<br>
?><br>
//the above php code will display 3.1415926535898 (the php definition of the integer float function pi) if in a php document and the space removed from between the < and ?php characters<br>
//
</body>
</html>