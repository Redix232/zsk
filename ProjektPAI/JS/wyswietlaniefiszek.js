var tablica= [["czerwony","red"],
["różowy","pink"],["niebieski","blue"],["zielony","green"],
["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"]]
var i =0;
var holder = document.getElementById("fiszka");


    var ezNode = document.querySelector("#ez");
   
    ezNode.addEventListener('click',()=>{
        
        if(holder.childNodes.length >1)
{
    alert("nie możesz tego zrobić");
}
        
        
else{var ileDiv = 4; 
       var j = 0;
        console.log(holder.childNodes);
        while(j<ileDiv)
        {
        var  newDiv = document.createElement("div");
            newDiv.className = "fiszka";
            newDiv.id = "d"+i;
        newDiv.innerHTML = '<p class="pfiszka">'+tablica[i][0]+"</p>";
        
        holder.appendChild(newDiv);
            i++;
            j++;
            
        }
    
        var lista = document.querySelectorAll(".fiszka");
    
        var listaid =new Set();
        lista.forEach((elem)=>{
        elem.addEventListener('click',()=>{
            if(elem.klik==true)
            {
                listaid.delete(elem.id)
                elem.klik=false; 
                elem.style.backgroundColor="azure";
            }
            else
            {
                elem.style.backgroundColor="red";
                listaid.add(elem.id);
                elem.klik=true;
                
                console.log(listaid); 
                console.log(elem.xd); 
            }
            
        })
        })
    
        var umiemNode = document.querySelector("#umiem");
        umiemNode.addEventListener('click',()=>{
        listaid.forEach((id)=>{
            var usun = document.querySelector("#"+id);
            usun.remove();
        })
        listaid = new Set();
    
        })
    
        var listap = document.querySelectorAll(".pfiszka");
    
    
        var reversNode = document.querySelector("#revers");
        var klik ;
        reversNode.addEventListener('click',()=>{
        var b = [];
        if(klik==true)
        {
            for(var i=0;i<listap.length;i++)
        {
        
            listap[i].textContent=tablica[i][0];
        }
            klik=false;
        }
        else
        {
        for(var i=0;i<listap.length;i++)
        {
        
            
            listap[i].textContent=tablica[i][1];
        }
        klik=true;
        }
    
    
        })
    }
    })

    




var normalNode = document.querySelector("#normal");
normalNode.addEventListener('click',()=>{
    if(holder.childNodes.length >1)
    {
        alert("nie możesz tego zrobić");
    }

else{
var ileDiv = 8;    

var j=0;
while(j<ileDiv)
{
  var newDiv = document.createElement("div");
    newDiv.className = "fiszka";
    newDiv.id = "d"+i;
  newDiv.innerHTML = '<p class="pfiszka">'+tablica[i][0]+"</p>";
  
  document.getElementById("fiszka").appendChild(newDiv);
    i++;
    j++;
}

var lista = document.querySelectorAll(".fiszka");

var listaid =new Set();
lista.forEach((elem)=>{
elem.addEventListener('click',()=>{
    if(elem.klik==true)
    {
        listaid.delete(elem.id)
        elem.klik=false; 
        elem.style.backgroundColor="azure";
    }
    else
    {
        elem.style.backgroundColor="red";
        listaid.add(elem.id);
        elem.klik=true;
        
        console.log(listaid); 
        console.log(elem.xd); 
    }
    
})
})

var umiemNode = document.querySelector("#umiem");
umiemNode.addEventListener('click',()=>{
listaid.forEach((id)=>{
    var usun = document.querySelector("#"+id);
    usun.remove();
})
listaid = new Set();

})

var listap = document.querySelectorAll(".pfiszka");


var reversNode = document.querySelector("#revers");
var klik ;
reversNode.addEventListener('click',()=>{
var b = [];
if(klik==true)
{
    for(var i=0;i<listap.length;i++)
{
   
    listap[i].textContent=tablica[i][0];
}
    klik=false;
}
else
{
for(var i=0;i<listap.length;i++)
{
   
    
    listap[i].textContent=tablica[i][1];
}
klik=true;
}


})
}
})

var hardNode = document.querySelector("#hard");
hardNode.addEventListener('click',()=>{
    if(holder.childNodes.length >1)
    {
        alert("nie możesz tego zrobić");
    }

else{
var ileDiv = 12; 
var j=0;
while(j<ileDiv)
{
  var  newDiv = document.createElement("div");
    newDiv.className = "fiszka";
    newDiv.id = "d"+i;
  newDiv.innerHTML = '<p class="pfiszka">'+tablica[i][0]+"</p>";
  
  document.getElementById("fiszka").appendChild(newDiv);
    i++;
    j++;
}

var lista = document.querySelectorAll(".fiszka");

var listaid =new Set();
lista.forEach((elem)=>{
elem.addEventListener('click',()=>{
    if(elem.klik==true)
    {
        listaid.delete(elem.id)
        elem.klik=false; 
        elem.style.backgroundColor="azure";
    }
    else
    {
        elem.style.backgroundColor="red";
        listaid.add(elem.id);
        elem.klik=true;
        
        console.log(listaid); 
        console.log(elem.xd); 
    }
    
})
})

var umiemNode = document.querySelector("#umiem");
umiemNode.addEventListener('click',()=>{
listaid.forEach((id)=>{
    var usun = document.querySelector("#"+id);
    usun.remove();
})
listaid = new Set();

})

var listap = document.querySelectorAll(".pfiszka");


var reversNode = document.querySelector("#revers");
var klik ;
reversNode.addEventListener('click',()=>{
var b = [];
if(klik==true)
{
    for(var i=0;i<listap.length;i++)
{
   
    listap[i].textContent=tablica[i][0];
}
    klik=false;
}
else
{
for(var i=0;i<listap.length;i++)
{
   
    
    listap[i].textContent=tablica[i][1];
}
klik=true;
}


})
}
})

