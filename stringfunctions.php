<?php
$str = "Welcome to my humble Homepage!";
echo $str."<br>";
/*addcslashes
*/
echo addcslashes($str,'m')."<br>";
echo addcslashes($str,'a...z')."<br>";
//addslashes-return string with backslash infront of predefined characters.
$str = addslashes('What does "yolo" mean?');
echo($str)."<br>"; 
//bin2hex-converts binary data to hexadecimal values
$str = bin2hex("Hello World!");
echo($str)."<br>";
//chop-removes characters from right end of a string
$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!")."<br>";
//chr-return characters from differnt ascii values
$str = chr(046);
echo("You $str me forever!")."<br>";
//chuncksplit()-split the string into smaller pieces
$str = "Hello world!";
echo chunk_split($str,6,"...")."<br>";
//The convert_uudecode() function decodes a uuencoded string.
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str)."<br>"; 
//The convert_uuencode() function encodes a string using the uuencode algorithm.
$str = "Hello world!";
echo convert_uuencode($str)."<br>";
//count_chars-Return a string with all the different characters used in "Hello World!" (mode 3):
$str = "Hello World!";
echo count_chars($str,3)."<br>";
//cr32()-It calculates 32 bit cyclic redundancy checksum of a string
$str = crc32("Hello World!");
printf("%u\n",$str)."<br>";
//echo()-It outputs one or more strings.
$str1="Hello world!";
echo $str1 ."<br>";
//explode-breaks string into an array.
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str))."<br>";
//fprintf-we write some textr to text filed named test.txt
$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str)."<br>";
//get_html_transistion table-Print the translation table used by the htmlspecialchars function
print_r (get_html_translation_table()); 
"<br>";
//hebrev-The hebrev() function converts Hebrew text from a right-to-left flow to a left-to-right flow.
echo hebrev("á çùåï äúùñâ")."<br>";
//hex2bin-converts hexadecimal values to ASCII characters.
echo hex2bin("48656c6c6f20576f726c6421")."<br>";
//html_entity_decode()-converts html entitites to characters.
$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str)."<br>";
//htmlentities() Function-converts some characters into html entities
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str)."<br>";
//htmlspecialchars_decode()-Convert the predefined HTML entities "&lt;" (less than) and "&gt;" (greater than) to characters
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str)."<br>";
//htmlspecialchars-Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str)."<br>";
//implode()-join array elements with string.#returns string from array of elements.
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>";
//join()-It returns string from array of elements.
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
//lcfirst-converts first character to lowercase of a string
echo lcfirst("Hello world!")."<br>";
//levenshtein() Function-calculates levenshtein distance between two strings.
echo levenshtein("Hello World","ello World")."<br>";
//ltrim()-removes characters from left side of a string.
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello")."<br>";
//md5()-calculates md5 hash of the string hello.
$str = "Hello";
echo md5($str);
?>
