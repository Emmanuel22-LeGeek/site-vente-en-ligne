<?php
require_once __DIR__ . '/../models/ProduitModel.php';

class ProduitController {
    public function index() {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo "Produit non spécifié.";
            return;
        }

        $produit = ProduitModel::getById($id);

        if (!$produit) {
            echo "Produit introuvable.";
            return;
        }

        require __DIR__ . '/../views/produit.php';
    }
}