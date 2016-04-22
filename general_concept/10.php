<?php  
$a = file('http://www.google.com/');  
foreach ($a as $line_num => $line)  
 {  
    echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>\n";  
 }  
?>  