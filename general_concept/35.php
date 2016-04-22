<?php  
echo "<table border =\"1\" style='border-collapse: collapse'>";  
    for ($r=1; $r <= 10; $r++) 
    {   
        echo "<tr> \n"; 

        for ($c=1; $c <= 10; $c++) 
        {   
           $p = $c * $r;  
           echo "<td>$p</td> \n";  
            }  
            echo "</tr>";  
        }  
        echo "</table>";  
?>  