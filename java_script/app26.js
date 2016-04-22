function draw()   
  {  
      var canvas = document.getElementById("canvas");  
      if (canvas.getContext)  
      {  
        var context = canvas.getContext("2d");  
          
        context.fillStyle = "rgba(256,0,0,0.6)";  
        context.fillRect (15, 10, 55, 50);  
          
        context.fillStyle = "rgba(0, 0, 256, 0.6)";  
        context.fillRect (35, 30, 55, 50); 

        context.fillStyle= "rgba(0,256,0,0.6)";
        context.fillRect(55,50,55,50); 

        context.fillStyle= "rgba(0,256,256,0.6)";
        context.fillRect(75,70,55,50); 

        context.fillStyle= "rgba(256,256,0,0.6)";
        context.fillRect(95,90,55,50); 

        context.fillStyle= "rgba(256,0,256,0.6)";
        context.fillRect(115,110,55,50); 
      }  
  } 