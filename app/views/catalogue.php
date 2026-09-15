<?php require __DIR__ . '/partials/header.php'; ?>

    <section class="produits-vedette">
        <h2>Notre catalogue</h2>

        <div class="filtres">
            <a href="/site-vente/public/index.php?page=catalogue">Tout</a>
            <a href="/site-vente/public/index.php?page=catalogue&categorie=vetements">Vêtements</a>
            <a href="/site-vente/public/index.php?page=catalogue&categorie=accessoires">Accessoires</a>
            <a href="/site-vente/public/index.php?page=catalogue&categorie=parfums">Parfums</a>
        </div>

        <div class="grille-produits">
            <?php foreach ($produits as $produit): ?>
                <div class="carte-produit">
                    <img src="/site-vente/public/images/produits/<?php echo htmlspecialchars($produit['image']); ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
                    <h3><?php echo htmlspecialchars($produit['nom']); ?></h3>
                    <p class="prix"><?php echo number_format($produit['prix'], 0, ',', ' '); ?> FCFA</p>
                    <a href="/site-vente/public/index.php?page=produit&id=<?php echo $produit['id']; ?>" class="btn-secondaire">Voir plus</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>