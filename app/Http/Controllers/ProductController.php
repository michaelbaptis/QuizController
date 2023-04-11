<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = [[
            'id' => '1',
            'productName' => 'Electrike',
            'productDesc' => 'Pokemon with level rarity Rare',
            'rarity' => '1',
        ],
        [
            'id' => '2',
            'productName' => 'Krokorok',
            'productDesc' => 'Pokemon with level rarity Super Rare',
            'rarity' => '2',
        ],
        [
            'id' => '3',
            'productName' => 'Garchomp',
            'productDesc' => 'Pokemon with level rarity Super Super Rare',
            'rarity' => '3',
        ],
        [
            'id' => '4',
            'productName' => 'Lileep',
            'productDesc' => 'Pokemon with level rarity Rare ',
            'rarity' => '1',
        ],
        [
            'id' => '5',
            'productName' => 'Pikachu',
            'productDesc' => 'Pokemon with level rarity Super Rare',
            'rarity' => '2',
        ],
        [
            'id' => '6',
            'productName' => 'Sealeo',
            'productDesc' => 'Pokemon with level rarity Super Rare',
            'rarity' => '2',
        ],
        [
            'id' => '7',
            'productName' => 'Miaw Two',
            'productDesc' => 'Pokemon with level rarity Super Super Rare',
            'rarity' => '3',
        ],
        [
            'id' => '8',
            'productName' => 'Poipole',
            'productDesc' => 'Pokemon with level rarity Super Super Rare',
            'rarity' => '3',
        ],
        ];

        return view('product',compact('products'));
    }

    public function detil($idProd){
        $products = [['id' => '1',
        'productName' => 'Electrike',
        'productDesc' => 'Pokemon with level rarity Rare',
        'rarity' => '1',
    ],
    [
        'id' => '2',
        'productName' => 'Krokorok',
        'productDesc' => 'Pokemon with level rarity Super Rare',
        'rarity' => '2',
    ],
    [
        'id' => '3',
        'productName' => 'Garchomp',
        'productDesc' => 'Pokemon with level rarity Super Super Rare',
        'rarity' => '3',
    ],
    [
        'id' => '4',
        'productName' => 'Lileep',
        'productDesc' => 'Pokemon with level rarity Rare ',
        'rarity' => '1',
    ],
    [
        'id' => '5',
        'productName' => 'Pikachu',
        'productDesc' => 'Pokemon with level rarity Super Rare',
        'rarity' => '2',
    ],
    [
        'id' => '6',
        'productName' => 'Sealeo',
        'productDesc' => 'Pokemon with level rarity Super Rare',
        'rarity' => '2',
    ],
    [
        'id' => '7',
        'productName' => 'Miaw Two',
        'productDesc' => 'Pokemon with level rarity Super Super Rare',
        'rarity' => '3',
    ],
    [
        'id' => '8',
        'productName' => 'Poipole',
        'productDesc' => 'Pokemon with level rarity Super Super Rare',
        'rarity' => '3',
    ],
    ];
        $product = $products[$idProd-1];
        return view('detil', compact('product'));
    }
}
