<?php  
$text = 'CABLE FABLE'; 
echo $text; 
echo '<br>';
$text = preg_replace('/(\b[a-z])/i','T',$text);  
echo $text;  
?>  