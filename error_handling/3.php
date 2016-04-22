<?php  
function w3r_html() {  
    w3r_php();  
}  
function w3r_php() {  
    w3r_mysql();  
}  
function w3r_mysql(){  
    debug_print_backtrace();  
}  
w3r_html();  
?>  