<?php  
function Prime($n)  
{  
 for($x=2; $x<$n; $x++)  
   {  
      if($n %$x ==0)  
          {  
           return 0;  
          }  
    }  
  return 1;  
   }  

$a = Prime(3); 
 
if ($a==0)  
echo 'This is not a Prime No.....!!';  
else  
echo 'This is  a Prime No......!!!';  
?>  