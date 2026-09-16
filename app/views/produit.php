<?php require __DIR__ . '/partials/header.php'; ?>

    <section class="fiche-produit">
        <div class="fiche-produit-contenu">
            <img src="/site-vente/public/images/produits/<?php echo htmlspecialchars($produit['image']); ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
            <div class="fiche-produit-infos">
                <h1><?php echo htmlspecialchars($produit['nom']); ?></h1>
                <p class="prix"><?php echo number_format($produit['prix'], 0, ',', ''); ?> FCFA</p>
                <p class="description"><?php echo htmlspecialchars($produit['description']); ?></p>
                <a href="/site-vente/public/index.php?page=commande&id=<?php echo $produit['id']; ?>" class="btn">Commander</a>
            </div>   
    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>