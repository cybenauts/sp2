  <html>      
  <title>
  	Board
  </title>  
  <body>   
  <h3>Chess Board</h3>  
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">  
      <?php  
      for($r=1;$r<=8;$r++)  
      {  
          echo "<tr>";  
          for($c=1;$c<=8;$c++)  
          {  
          $total=$r+$c;  
          if($total%2==0)  
          {  
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";  
          }  
          else  
          {  
          echo "<td height=30px width=30px bgcolor=#000000></td>";  
          }  
          }  
          echo "</tr>";  
    }  
          ?>  
  </table>  
  </body>  
  </html>  
</html> 