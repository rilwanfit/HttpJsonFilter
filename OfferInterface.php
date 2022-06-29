<?php

declare(strict_types=1);


interface OfferInterface
{
    public function getPrice(): float;

    public function getVendorId(): int;
}
