<?php require __DIR__ . '/partials/header.php'; ?>

    <section class="commande">
        <h1>Passer une commande</h1>

        <?php if ($produit): ?>
            <p class="produit-selectionne">
                Produit sélectionné : <strong><?php echo htmlspecialchars($produit['nom']); ?></strong>
                (<?php echo number_format($produit['prix'], 0, ',', '');?> FCFA)
            </p>    
        <?php endif; ?>

        <form id="formCommande" class="formulaire">
            <div class="champ">
                <label for="nom">Nom complet *</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class="champ">
                <label for="telephone">Téléphone *</label>
                <input type="tel" id="telephone" name=telephone" required placeholder="77 658 63 54">
            </div>
            
            <div class="champ">
                <label for="produit">Produit souhaité *</label>
                <input type="text" id="produit" name="produit" required value="<?php echo $produit ? htmlspecialchars($produit['nom']) : ''; ?>">
            </div>

            <div class="champ">
                <label for="quantite">Quantité *</label>
                <input type="number" id="quantite" name="quantite" min="1" value="1" required>
            </div>

            <div class="champ">
                <label for="message">Message (optionnel)</label>
                <textarea id="message" name="message" rows="4" placeholder="Précisions : taille, couleur, adresse de livraison..."></textarea>
            </div> 

            <p id="erreurFormulaire" class="erreur"></p>

            <button type="submit" class="btn">Envoyer la commande sur WhatsApp</button>
        </form>
    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>