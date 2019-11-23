var tablica= [["czerwony","red"],
["różowy","pink"],["niebieski","blue"],["zielony","green"],
["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"],["xd","lol"]]


var ezNode = document.querySelector("#ez");
ezNode.addEventListener('click',()=>{
var ileDiv = 4; 
var i =0;
while(i<ileDiv)
{
  var  newDiv = document.createElement("div");
    newDiv.className = "fiszka";
    newDiv.id = "d"+i;
  newDiv.innerHTML = '<p class="pfiszka">'+tablica[i][0]+"</p>";
  
  document.getElementById("fiszka").appendChild(newDiv);
    i++;
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
})


var normalNode = document.querySelector("#normal");
normalNode.addEventListener('click',()=>{
var ileDiv = 8; 

    
    
var i =0;
while(i<ileDiv)
{
  var newDiv = document.createElement("div");
    newDiv.className = "fiszka";
    newDiv.id = "d"+i;
  newDiv.innerHTML = '<p class="pfiszka">'+tablica[i][0]+"</p>";
  
  document.getElementById("fiszka").appendChild(newDiv);
    i++;
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
})

var hardNode = document.querySelector("#hard");
hardNode.addEventListener('click',()=>{
var ileDiv = 12; 

    
    
var i =0;
while(i<ileDiv)
{
  var  newDiv = document.createElement("div");
    newDiv.className = "fiszka";
    newDiv.id = "d"+i;
  newDiv.innerHTML = '<p class="pfiszka">'+tablica[i][0]+"</p>";
  
  document.getElementById("fiszka").appendChild(newDiv);
    i++;
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
})

