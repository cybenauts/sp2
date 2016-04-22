
<?php  
function array_change_value_case($input, $ucase)  
{  
$case = $ucase;  
$narray = array();  
if (!is_array($input))  
{  
return $narray;  
}  
foreach ($input as $key => $value)  
{  
if (is_array($value))  
{  
$narray[$key] = array_change_value_case($value, $case);  
 continue;  
}  
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));  
}  
return $narray;  
}  
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');  
echo 'Actual array <br>';  
print_r($Color);  
echo '<br>Values are in lower case.<br>';  
$myColor = array_change_value_case($Color,CASE_LOWER);  
print_r($myColor);  
echo '<br>Values are in upper case.<br>';  
$myColor = array_change_value_case($Color,CASE_UPPER);  
print_r($myColor);  
?>  