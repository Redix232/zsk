var createNode = document.querySelector("#create");
createNode.addEventListener('click',()=>{
    var kolor = document.getElementById("create");
    var hide = document.getElementById("as1");
    var hide1 =document.getElementById("se1");
    kolor.style.color = "white";
    hide.style.display="none";
    hide1.style.display="none";
    var unkolor = document.getElementById("create3");
    var hide = document.getElementById("as3");
    var hide1 =document.getElementById("se3");
    unkolor.style.color = "black";
    hide.style.display="none";
    hide1.style.display="none";
    var unkolor = document.getElementById("create2");
    var unhide = document.getElementById("as2");
    var unhide2 = document.getElementById("se2");
    unkolor.style.color = "black";
    unhide.style.display="block";
    unhide2.style.display="block";
   

    })

    var createNode = document.querySelector("#create2");
createNode.addEventListener('click',()=>{
    var unkolor = document.getElementById("create");
    var hide = document.getElementById("as2");
    var hide1 =document.getElementById("se2");
    unkolor.style.color = "black";
    hide.style.display="none";
    hide1.style.display="none";
    var unkolor = document.getElementById("create3");
    var hide = document.getElementById("as3");
    var hide1 =document.getElementById("se3");
    unkolor.style.color = "black";
    hide.style.display="none";
    hide1.style.display="none";
    var unhide = document.getElementById("as1");
    var unhide2 = document.getElementById("se1");
    var kolor = document.getElementById("create2");
    kolor.style.color = "white";
    unhide.style.display="block";
    unhide2.style.display="block";
    })


    var createNode = document.querySelector("#create3");
    createNode.addEventListener('click',()=>{
        var unkolor = document.getElementById("create");
        unkolor.style.color = "black";
        var unkolor = document.getElementById("create2");
        unkolor.style.color = "black";
        var hide = document.getElementById("as2");
        var hide1 =document.getElementById("se2");
        hide.style.display="none";
        hide1.style.display="none";
        var hide = document.getElementById("as1");
        var hide1 =document.getElementById("se1");
        hide.style.display="none";
        hide1.style.display="none";

        
        var unhide = document.getElementById("as3");
        var unhide2 = document.getElementById("se3");
        var kolor = document.getElementById("create3");
        kolor.style.color = "white";
        unhide.style.display="block";
        unhide2.style.display="block";
        })


var jezykNode = document.querySelector("#jezyk");
jezykNode.addEventListener('click',()=>{
    var x = document.querySelector("#czydziala");
    if(jezykNode.value =="Angielski")
        {
            
            x.lang = "en";
        }
    else if (jezykNode.value == "Niemiecki")
    {
        x.lang = "de";
    }

})

var i=0;
var zaznaczone="";
var tab = [[],[]];
var plusNode = document.querySelector("#plus");
plusNode.addEventListener('click',()=>{
  
    var s = document.getElementById("slowo").value;
    var t = document.getElementById("tlumaczenie").value;
    
  var  newli = document.createElement("li");
    newli.className = "lista";
    i++;
    newli.id = "f"+i;
  newli.innerHTML = '<p>'+s+" - "+t+'</p>';
  
    newli.addEventListener('click',()=>{
      
    document.getElementById("slowo").value=s;
    document.getElementById("tlumaczenie").value =t;
    newli.style.backgroundColor="grey";
    var minusNode = document.querySelector("#minus")
    minusNode.addEventListener('click',()=>{
       newli.remove(); 
       document.getElementById("slowo").value = " ";
  document.getElementById("tlumaczenie").value = " ";
    })
    })
  document.getElementById("lista").appendChild(newli);

  document.getElementById("slowo").value = " ";
  document.getElementById("tlumaczenie").value = " ";





})




