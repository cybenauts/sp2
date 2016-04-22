<?php  
function w3r($str)  
{  
    echo "We are learning:".$str."<br />";  
    var_dump(debug_backtrace());  
}  
w3r('php');  
?>  