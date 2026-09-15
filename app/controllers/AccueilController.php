<?php
require_once __DIR__ . '/../models/ProduitModel.php';

class AccueilController {
    public function index() {
        $produitsVedette = ProduitModel::getVedette(3);
        require __DIR__ . '/../views/accueil.php';
    }
}