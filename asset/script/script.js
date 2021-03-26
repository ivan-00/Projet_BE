"use strict";
console.log ('hello word');
// Fiche produit bouton ajouter au paneir.
let btnPlus         = document.getElementById('plus');
let btnMoins        = document.getElementById('moins');
let res             = document.getElementById('result');
let result          = parseInt(res.value,10);
let prixAffiche     = document.getElementById('text_prix');
let prixDepart      = document.getElementById('text_prix');
let prixFinal       = prixAffiche.value;

res.addEventListener('blur',function(){
    result = document.getElementById('result');
    result = parseInt(result.value,10);
});

btnPlus.addEventListener('click', function() {
    if(result >= 0 && result < 99){
        result++;
        document.getElementById('result').value = result;
        let prixFinal   = result * prixAffiche.innerHTML;
        prixAffiche.innerHTML = prixFinal;
        console.log('prixFinal');
        
    }
});
btnMoins.addEventListener('click', function(){
    if(result > 0 && result <= 99){
        result --;
        document.getElementById('result').value = result;
        if (prixAffiche / 2){
            prixAffiche   = prixDepart / 2;
            prixAffiche.innerHTML = prixFinal;
        }
        // let prixFinal   =  prixAffiche.innerHTML / result
        // prixAffiche.innerHTML = prixFinal;
    }
});
// Calculer le prix. 


