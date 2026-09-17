<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../app/controllers/AccueilController.php';
require_once __DIR__ . '/../app/controllers/CatalogueController.php';
require_once __DIR__ . '/../app/controllers/ProduitController.php';
require_once __DIR__ . '/../app/controllers/CommandeController.php';
require_once __DIR__ . '/../app/controllers/ContactController.php';

$page = $_GET['page'] ?? 'accueil';

switch ($page) {
    case 'accueil':
        (new AccueilController())->index();
        break;

    case 'catalogue':
        (new CatalogueController())->index();
        break;

    case 'produit':
        (new ProduitController())->index();
        break;

    case 'commande':
        (new CommandeController())->index();
        break;

    case 'contact':
        (new ContactController())->index();
        break;

    default:
        echo "Page introuvable.";
        break;
}