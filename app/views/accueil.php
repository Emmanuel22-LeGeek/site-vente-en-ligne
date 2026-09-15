<?php require __DIR__ . '/partials/header.php'; ?>

      <section class = "hero">
        <h1>Bienvenue Sur Ma Boutique</h1>
        <p>Vêtements, accessoires et parfums, faits avec soin.</p>
        <a href = "/site-vente/public/index.php?page=catalogue" class = "btn"> Voir le catalogue </a>
      </section>

    <section class = "produits-vedette">
    <h2>Nos coups de cœur </h2>
        <div class = "grille-produits">
            <?php foreach ($produitsVedette as $produit) : ?>
                <div class = "carte-produit">
                    <img src = "/site-vente/public/images/produits/<?php echo htmlspecialchars($produit['image']); ?>" alt = "<?php echo htmlspecialchars($produit['nom']); ?>">
                    <h3><?php echo htmlspecialchars($produit['nom']); ?></h3>
                    <p class = "prix"><?php echo number_format($produit['prix'], 0, ',', ''); ?> FCFA </p>
                    <a href = "/site-vente/public/index.php?page=produit&id = <?php $produit['id']; ?>" class = "btn-secondaire"> Voir plus </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
<?php require __DIR__ . '/partials/footer.php'; ?>
    