<?php
require_once __DIR__ . '/../models/ProduitModel.php';

class CommandeController {
    public function index() {
        $id = $_GET['id'] ?? null;
        $produit = $id ? ProduitModel::getById($id) : null;

        require __DIR__ . '/../views/commande.php';
    }
}