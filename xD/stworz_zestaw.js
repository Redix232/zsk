var createNode = document.querySelector("#create");
createNode.addEventListener('click',()=>{
    var kolor = document.getElementById("create");
    var hide = document.getElementById("as1");
    var hide1 =document.getElementById("se1");
    kolor.style.color = "white";
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
    var unhide = document.getElementById("as1");
    var unhide2 = document.getElementById("se1");
    var kolor = document.getElementById("create2");
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


var plusNode = document.querySelector("#plus");
plusNode.addEventListener('click',()=>{
  
    var s = document.getElementById("slowo").value;
    var t = document.getElementById("tlumaczenie").value;
    var i=0;
  var  newli = document.createElement("li");
    newli.className = "lista";
    i++;
    newli.id = "d"+i;
  newli.innerHTML = '<p>'+s+" - "+t+'</p>';
  
  document.getElementById("lista").appendChild(newli);

  document.getElementById("slowo").value = " ";
  document.getElementById("tlumaczenie").value = " ";
 
})

var listNode = document.querySelector(".lista");

listNode.addEventListener('click',()=>{
    var s = document.getElementById("slowo");
    var t = document.getElementById("tlumaczenie");

    s.innerHTML = "twoja stara";
    t.innerHTML = "dupa";
})


