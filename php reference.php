<?php 
echo "<br><br><br>php is a computer language for manipulation of text within a document which has been edited to be displayed in an html web page, as of the Roman Calendar month May and year 2020
<br><br><br>php documents are interpreted as html pages when displayed on the net
<br><br><br>php code can be embedded in an html file
<br><br><br>after installing the webserver and php softwares, store the php file in the htdocs folder of the operating system and name it as index.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>php notes</title>
 </head>
 <body>
<br><br><br>Start a php file with < ?php and end it with ?>
<br><br><br>the number sign, # , or two forward slashes, // , in front of text within the php code are used for notes within the php web page and can only be read if the page is opened (as source code or) with a document editor
<br><br><br>a php command or "statement" can be written straight across one line or by using multiple lines
<br><br><br>php code must end with a semicolon, ; , or an error will be displayed (known as a parse error or syntax error)
<br><br><br>echo is a php fuction for displaying text as a php string or integer
 
<br><br><br>a php string is displayed on the html web page from within quotes single quotes, ' ' , or double quotes, "  "
<br><br><br>a string can be either text or dynamic data
<br><br><br>a php integer does not need single or double quotes to be displayed
<br><br><br>text is placed in the wen page using a php editor and cannot be manipulated within the web page
<br><br><br>dynamic data sometimes can be manipulated within the web page
<br><br><br>variables are used to store dynamic data for manipulation within strings
<br><br><br>the symbol for variable creation is the dollar sign, $
<br><br><br>a php variable is nameable with any text placed directly after the dollar sign without spaces
<br><br><br>a variable needs a space after the name, then an equal sign, = , a space and a string and lastly a semicolon to end the statement
<br><br><br>variables are displayed as the echo statement, a space, and the variable name with the dollar sign before it placed in the php file
<br><br><br>if placing the variable and the php statement echo within the php confines before the html confines, the php statement will display before any html displayed within the body
<br><br><br>if placing the php code within the html confines, the < div> tags must be used and the php code within the div tags < /div>
<br><br><br>php variables may be the same and the strings may be different, the web page will display the string defined in the last variable
<br><br><br>php variables may contain more than one string, known as an array
<br><br><br>a constant variable cannot be manipulated and is defined with the define function, then an open parenthesis, ( , a single open quote, ' ,the variable name (any text), a single closed quotation mark or quote, ' , a comma, , , and the (constant) string to be dispayed when called, confined by single quotations and ended with a close parenthesis and the semicolon
<br><br><br>Constants cannot be used multiple times in order to not be overridden in php
<br><br><br>php string concatenation (multiple strings) can be displayed with the echo function, a space, the first variable, a space (or not), a period a space (or not) and the next variable, ending with the semicolon
<br><br><br>the echo function, a space, text and a variable within the confines of double quotes will display the text then the string of the variable on the web page
<br><br><br>the echo function, a space, a string confined by double quotes with more text within the confines of another set of double quotes will display an error on the web page unless the second set of confined double qouted text are contained by a backslash, the first double quotation, \" , the text, the end backslash, followed by the two flanking double quotes and the semicolon, \""; ,because the first double quotes confine themselves without the backslashes.  
<br><br><br>The echo function, a space, a string confined within double quotes contained within the confines of single quotes will display the string and the text within the double quotes as text with more double quote puncuation
<br><br><br>to get characters from a string, use square bracket notation, [ ] , php code= echo, space, variable and the number of the character within the string from the variable contained within square brackets
<br><br><br>the string length function is used in order to find the number of characters within a string. php code= echo strlen(variable)
<br><br><br>arguements are the string called using the variable defined within the confines of parenthesis
<br><br><br>echo funtion, space, strtoupper(variable) calls the variable string in upper case
<br><br><br>echo funtion, space, strtolower(variable) calls the variable string in lower case
<br><br><br>echo funtion, space, str_replace('arguement', 'arguement', variable) replaces the variable string character (first arguement) with the second arguement within the variable string when displayed in the html page
 <br><br><br><a href="index.php">Click this to go back</a>
 </body>
 </html>