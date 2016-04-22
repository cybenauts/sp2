<?php  
$a_array = array("abcd","abc","de","hjjj","g","wer",'moonis','matrix');

$b_array = array_map('strlen', $a_array);  // array map function
   
echo "The shortest array length is " . min($b_array) . '<br>';
echo "The longest array length is " . max($b_array).'<br>'; 
?>