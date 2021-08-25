<?php

namespace App\Enums;

class ProductSortParams
{
    const NAME = 'name';
    const AMOUNT = 'amount';
    const PRICE = 'price';
    const CATEGORY = 'category_id';

    const PARAMS = [
        self::NAME,
        self::AMOUNT,
        self::PRICE,
        self::CATEGORY,
    ];
}
