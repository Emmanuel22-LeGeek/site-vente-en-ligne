<?php
class ProduitModel{
    private static function getData(){
        return[
            ['id' => 1, 'nom' => 'Robe', 'prix' => 15000, 'categorie' => 'vetements', 'description' => 'Robe en tissu, taille unique', 'image' => 'robe-wax-01.jpg'],
            ['id' => 2, 'nom' => 'Bracelet Artisanal', 'prix' => '3500', 'categorie' => 'accessoires', 'description' => 'Bracelet fait main perles', 'image' => 'bracelet-01.jpg'],
            ['id' => 3, 'nom' => 'Sac', 'prix' => '12000', 'categorie' => 'accessoires', 'description' => 'Sac artisanal tissé à la main', 'image' => 'sac-01.jpg'],
            ['id' => 4, 'nom' => 'T-shirt', 'prix' => '6000', 'categorie' => 'vetements', 'description' => 'T-shirt en coton, plusieurs tailles disponibles', 'image' => 't-shirt-01.jpg'],
            ['id' => 5, 'nom' => 'Pantalon wax', 'prix' => '10000', 'categorie' => 'vetements', 'description' => 'Pantalon en tissu wax, coupe droite', 'image' => 'pantalon-01.jpg'],
            ['id' => 6, 'nom' => 'Ensemble deux pièces', 'prix' => '20000', 'categorie' => 'vetements', 'description' => 'Ensemble haut + bas assorti', 'image' => 'ensemble-01.jpg'],
            ['id' => 7, 'nom' => 'Parfum', 'prix' => '8000', 'categorie' => 'parfums', 'description' => 'Parfum longue tenue, senteur florale', 'image' => 'parfum-01.jpg'],
        ];
    }

    public static function getAll(){
        return self::getData();
    }
    
    public static function getVedette($nombre = 3){
        return array_slice(self::getData(), 0, $nombre);
    }

    public static function getById($id){
        foreach (self::getData() as $produit){
            if($produit['id'] == $id){
                return $produit;
            }
        }
        return null;
    }

    public static function getByCategorie($categorie){
        return array_filter(self::getData(), function($produit) use ($categorie){
            return $produit['categorie'] === $categorie;
        });
    }
}