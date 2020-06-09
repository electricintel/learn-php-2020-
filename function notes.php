<?php 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>function notes</title>
 </head>
 <body>
 	 <br><br><br><a href="index.php">Click this to go back</a>
 <br><br>a constant variable cannot be manipulated and is defined with the define function, then an open parenthesis, ( , a single open quote, ' ,the variable name (any text), a single closed quotation mark or quote, ' , a comma, , , and the (constant) string to be dispayed when called, confined by single quotations and ended with a close parenthesis and the semicolon
<br><br>Constants cannot call on any variable multiple times in order to not be override the string in php
<br><br>to call a constant, one could use the php function echo, a space, the defined variable and ended with a semicolon
<br><br>php string concatenation (multiple strings) can be displayed with the echo function, the first variable, a space (or not), a period a space (or not) and the next variable, ending with the semicolon
<br><br>the echo function, a space, text and a variable within the confines of double quotes will display the text then the string of the variable on the web page
<br><br>the echo function, a space, a string confined by double quotes with more text within the confines of another set of double quotes will display an error on the web page unless the second set of confined double qouted text are contained by a backslash, the first double quotation, \" , the text, the end backslash, followed by the two flanking double quotes and the semicolon, \""; ,because the first double quotes confine themselves without the backslashes.  
<br><br>The echo function, a space, a string confined within double quotes contained within the confines of single quotes will display the string and the text within the double quotes as text with more double quote puncuation
<br><br>to get characters from a string, use square bracket notation, [ ] , php code= echo, space, variable and the number of the character within the string from the variable contained within square brackets
<br><br>the string length function is used in order to find the number of characters within a string. php code= strlen(variable)
<br><br>arguements are the string called using the variable defined within the confines of parenthesis
<br><br>echo funtion, space, strtoupper(variable) calls the variable string in upper case
<br><br>echo funtion, space, strtolower(variable) calls the variable string in lower case
<br><br>echo funtion, space, str_replace('arguement', 'arguement', variable) replaces the variable string character (first arguement) with the second arguement within the variable string when displayed in the html page
 </body>
 </html>