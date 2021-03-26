"use strict";

console.log('hello word'); // Fiche produit bouton ajouter au paneir.

var btnPlus = document.getElementById('plus');
var btnMoins = document.getElementById('moins');
var res = document.getElementById('result');
var result = parseInt(res.value, 10);
var prixAffiche = document.getElementById('text_prix');
var prixDepart = document.getElementById('text_prix');
var prixFinal = prixAffiche.value;
res.addEventListener('blur', function () {
  result = document.getElementById('result');
  result = parseInt(result.value, 10);
});
btnPlus.addEventListener('click', function () {
  countQuantity++;
  fieldQuantity.value = countQuantity;
});
btnMoins.addEventListener('click', function () {
  if (countQuantity > 1) {
    countQuantity--;
    fieldQuantity.value = countQuantity;
  }
}); // Calculer le prix. 
// .....................................

btnQuantityPlus.addEventListener('click', function () {
  countQuantity++;
  fieldQuantity.value = countQuantity;
});
btnQuantityMinus.addEventListener('click', function () {
  if (countQuantity > 1) {
    countQuantity--;
    fieldQuantity.value = countQuantity;
  }
});
btnPricePlus.addEventListener('click', function () {
  countPrice++;
  fieldPrice.value = countPrice;
});
btnPriceMinus.addEventListener('click', function () {
  if (countPrice > 1) {
    countPrice--;
    fieldPrice.value = countPrice;
  }
}); // ...................................