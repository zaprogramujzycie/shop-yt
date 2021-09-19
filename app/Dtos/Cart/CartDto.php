<?php

namespace App\Dtos\Cart;

class CartDto
{
    private array $items = [];
    private float $totalSum = 0;
    private int $totalQuantity = 0;

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return float|int
     */
    public function getTotalSum(): float|int
    {
        return $this->totalSum;
    }

    /**
     * @param float|int $totalSum
     */
    public function setTotalSum(float|int $totalSum): void
    {
        $this->totalSum = $totalSum;
    }

    /**
     * @return int
     */
    public function getTotalQuantity(): int
    {
        return $this->totalQuantity;
    }

    /**
     * @param int $totalQuantity
     */
    public function setTotalQuantity(int $totalQuantity): void
    {
        $this->totalQuantity = $totalQuantity;
    }

    public function incrementTotalQuantity(): void
    {
        $this->totalQuantity += 1;
    }

    public function incrementTotalSum(float $price): void
    {
        $this->totalSum += $price;
    }
}
