<?php

declare(strict_types=1);


final class PriceFilterIterator extends FilterIterator
{
    public function __construct(
        Iterator $productIterator,
        private float $priceFrom,
        private float $priceTo,
    ) {
        parent::__construct($productIterator);
    }

    public function accept(): bool
    {
        $currentPrice = parent::current()->getPrice();

        return $currentPrice >= $this->priceFrom &&
            $currentPrice <= $this->priceTo;
    }
}
