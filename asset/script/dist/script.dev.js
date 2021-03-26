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
  if (result >= 0 && result < 99) {
    result++;
    document.getElementById('result').value = result;

    var _prixFinal = result * prixAffiche.innerHTML;

    prixAffiche.innerHTML = _prixFinal;
    console.log('prixFinal');
  }
});
btnMoins.addEventListener('click', function () {
  if (result > 0 && result <= 99) {
    result--;
    document.getElementById('result').value = result;

    if (prixAffiche / 2) {
      prixAffiche = prixDepart / 2;
      prixAffiche.innerHTML = prixFinal;
    } // let prixFinal   =  prixAffiche.innerHTML / result
    // prixAffiche.innerHTML = prixFinal;

  }
}); // Calculer le prix.