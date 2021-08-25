<?php

return [
    'welcome' => [
        'products' => 'Produkty',
        'categories' => 'Kategorie',
        'price' => 'Cena',
        'filter' => 'Filtruj',
        'sort' => 'Sortuj według:',
    ],
    'columns' => [
        'actions' => 'Akcje'
    ],
    'messages' => [
      'delete_confirm' => 'Czy na pewno chcesz usunąć rekord?'
    ],
    'button' => [
        'save' => 'Zapisz',
        'add' => 'Dodaj',
    ],
    'user' => [
        'index_title' => 'Lista użytkowników',
        'status' => [
            'delete' => [
                'success' => 'Użytkownik usunięty!'
            ],
        ],
    ],
    'product' => [
        'add_title' => 'Dodawanie produktu',
        'edit_title' => 'Edycja produktu: :name',
        'show_title' => 'Podgląd produktu',
        'index_title' => 'Lista produktów',
        'status' => [
            'store' => [
                'success' => 'Produkt zapisany!'
            ],
            'update' => [
                'success' => 'Produkt zaktualizowany!'
            ],
            'delete' => [
                'success' => 'Produkt usunięty!'
            ],
        ],
        'fields' => [
            'name' => 'Nazwa',
            'description' => 'Opis',
            'amount' => 'Ilość',
            'price' => 'Cena',
            'image' => 'Grafika',
            'category' => 'Kategoria',
            'category_id' => 'Kategoria', // additional entry to correctly read category name while using column name
        ]
    ]
];
