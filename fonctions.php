<?php
function home()
{
    $homepage = [
        [
            "titre" => "Accueil",
            "sous-titre" => "test",
        ]
        ];
    return [
        $homepage
    ];
}
function product()
{
    $produits = [
        [
            "produit" => "banane",
            "couleur" => "jaune",
        ],
        [
            "produit" => "pomme",
            "couleur" => "rouge",
        ],
        [
            "produit" => "haricot",
            "couleur" => "vert",
        ],
    ];
    return [
        $produits
    ];
}
function form()
{
    $test = [
        [
           "name" => "Nom",
           "mail" => "Mail",
           "message" => "Message",
        ]
        ];
    return [
        $test
    ];
}