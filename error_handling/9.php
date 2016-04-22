<?php  
    function w3r_notice($no, $str, $file, $line) {  
        echo "Encountered notice $no in $file, line $line: $str\n";  
    }  
    function func_error($num, $str, $file, $line) {  
        echo "Encountered error $num in $file, line $line: $str\n";  
    }  
    set_error_handler("w3r_notice", E_NOTICE);  
    set_error_handler("w3r_error", E_ERROR);  
    echo $demo;  
?> 