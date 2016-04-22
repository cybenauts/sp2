 <?php   
function w3r_exception_handler($w3r_exception)   
{   echo "Uncaught exception: " ,   
$exception->getMessage(),   
"\n"; }   
set_exception_handler('w3r_exception');   
throw new Exception('Uncaught Exception');   
echo "Not Executed\n";   
?>   
  