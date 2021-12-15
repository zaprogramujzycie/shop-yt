<?php

namespace App\ValueObjects;

use App\Models\Product;

class CartItem
{
    private int $productId;
    private string $name;
    private float $price;
    private ?string $imagePath;
    private int $quantity = 0;

    /**
     * @param Product $product
     * @param int $quantity
     */
    public function __construct(Product $product, int $quantity = 1)
    {
        $this->productId = $product->id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->imagePath = $product->image_path;
        $this->quantity += $quantity;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return string|null
     */
    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function getSum(): float
    {
        return $this->price * $this->quantity;
    }

    public function getImage(): string
    {
        return !is_null($this->imagePath) ? asset("storage/" . $this->imagePath) : config("shop.defaultImage");
    }

    public function addQuantity(Product $product): CartItem
    {
        return new CartItem($product, ++$this->quantity);
    }
}
