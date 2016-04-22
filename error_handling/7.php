<?php  
function err_log($error_no, $error_string)  
{  
  $filename = '/log/php_errors.log';    
  if(filesize($file) > 2048)   
{  
    rename($file, $file . (string) time( ));  
    clearstatcache( );  
    
}  
   error_log($error_string, 3, $filename);  
}  
set_error_handler('err_log');>  
  for($i = 0; $i < 2500; $i++)  
 {  
    trigger_error(time( ) . ": This is an error.\n");  
   
}  
restore_error_handler( );  
?>