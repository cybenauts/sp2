<?php  
function chkPalindrome($string)   
{  
  if ($string == strrev($string))  
      return 1;  
  else  
      return 0;  
}  
$c= chkPalindrome('madam');
if($c==1)
echo 'String is palindrome...'; 
else
 echo 'String is palindrome...'; 

?>  