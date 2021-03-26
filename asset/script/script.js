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

btnPlus.addEventListener('click', () => {
    countQuantity++;
    fieldQuantity.value = countQuantity;
});
btnMoins.addEventListener('click', () => {
    if (countQuantity > 1) {
        countQuantity--;
        fieldQuantity.value = countQuantity;
    }
});
// Calculer le prix. 
// .....................................
btnQuantityPlus.addEventListener('click', () => {
    countQuantity++;
    fieldQuantity.value = countQuantity;
});

btnQuantityMinus.addEventListener('click', () => {
    if (countQuantity > 1) {
        countQuantity--;
        fieldQuantity.value = countQuantity;
    }
});

btnPricePlus.addEventListener('click', () => {
    countPrice++;
    fieldPrice.value = countPrice;
});

btnPriceMinus.addEventListener('click', () => {
    if (countPrice > 1) {
        countPrice--;
        fieldPrice.value = countPrice;
    }
});
// ...................................


