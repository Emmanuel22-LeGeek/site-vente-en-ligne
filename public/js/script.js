document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formCommande');

    if (!form) return;

    const numeroWhatsApp = '221776586354';

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const nom = document.getElementById('nom').value.trim();
        const telephone = document.getElementById('telephone').value.trim();
        const produit = document.getElementById('produit').value.trim();
        const quantite = document.getElementById('quantite').value.trim();
        const message = document.getElementById('message').value.trim();
        const erreurEl= document.getElementById('erreurFormulaire');

        //Validation simple
        if (!nom || !telephone || !produit || !quantite) {
            erreurEl.textContent = 'Merci de remplir tous les champs obligatoires (*).';
            return;
        }

        erreurEl.textContent = '';

        //Constrution du message WhatshApp
        let texte = `Bonjour, je souhaite passer une commande :%0A`;
            texte += `- Nom : ${nom}%0A`;
            texte += `- Téléphone : ${telephone}%0A`;
            texte += `- Produit : ${produit}%0A`;
            texte += `- Quantité : ${quantite}%0A`;
        if (message) {
            texte += `- Message : ${message}%0A`;
        }

        const urlWhatsApp = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(decodeURIComponent(texte)).replace(/%250A/g, '%0A')}`;
        window.open(urlWhatsApp, '_blank');
    });
});