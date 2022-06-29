<?php

declare(strict_types=1);


final class Offer implements OfferInterface
{
    public function __construct(
        private int $offerId,
        private string $productTitle,
        private int $vendorId,
        private float $price
    ) {
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    public function getProductTitle(): string
    {
        return $this->productTitle;
    }
}
