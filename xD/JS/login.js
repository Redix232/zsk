var loginNode = document.querySelector("#login");
var blure = document.getElementById("blure");
var logowanie = document.getElementById("logowanie");
loginNode.addEventListener('click',()=>{

    
    blure.style.display="block";
    blure.style.filter="blur(9px)";
    logowanie.style.display = "block";
    logowanie.style.height="300px";

    var blureNode = document.querySelector("section");
    
    blureNode.addEventListener('click',()=>{
    
        
        
        blure.style.filter="none";
        logowanie.style.display = "none";
        logform.style.display="block";
        rejform.style.display="none";
        })
       

    })
   
  var rejestracjaNode = document.querySelector("#rejestracja");
  var logform = document.getElementById("logform");
  var rejform = document.getElementById("rejform");
  var loggNode = document.querySelector("#logg");

  rejestracjaNode.addEventListener('click',()=>{
      logform.style.display="none";
      rejform.style.display="block";
      logowanie.style.height="500px";

  })

  loggNode.addEventListener('click',()=>{
    rejform.style.display="none";
    logform.style.display="block";
    logowanie.style.height="300px";

})



        
    
   
 
        