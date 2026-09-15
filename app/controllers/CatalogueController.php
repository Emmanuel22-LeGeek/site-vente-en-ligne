<?php
require_once __DIR__ . '/../models/ProduitModel.php';

class CatalogueController{
    public function index() {
        $categorie = $_GET['categorie'] ?? null;

        if($categorie) {
            $produits = ProduitModel::getByCategorie($categorie);
        } else {
            $produits = ProduitModel::getAll();
        }

        require __DIR__ . '/../views/catalogue.php';
    }
}