<?php  
$orig = array( '1','2','3','4','5' );  
echo 'Original array : <br>';  
foreach ($orig as $x)   
{
echo "$x " ;
}  
$insert = 'A'; 

array_splice( $orig, 3, 0, $insert);//auto shifting   

echo " <br> After inserting '$' the array is :<br>";  
foreach ($orig as $x)   
{
	echo "$x ";
}  
?>