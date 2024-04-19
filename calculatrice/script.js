const buttons=document.querySelectorAll (".btn");
console.log(buttons);
const result=document.getElementById("result");
// const clear = document.querySelector("#clear");
buttons.forEach((button)=>{
    button.addEventListener("click",
    (e)=>{
       
        result.textContent+= e.target.id;

       
    });
});

// "e" permet de récupérer toutes les valeurs cliquer par l'utilisateur sur un bouton de notre calculatrice 

clear.addEventListener("click",
()=>{
    result.textContent="";
});

equal.addEventListener("click",
()=>{
    result.textContent=eval(result.textContent)
});

// // foreach permet de regrouper les classes



// document.getElementById('btn-start').click=function(){
//     setTimeout("prompt('cool')",1000);
//   }
  