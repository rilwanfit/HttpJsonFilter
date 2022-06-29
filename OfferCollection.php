<?php

declare(strict_types=1);


final class OfferCollection implements OfferCollectionInterface
{
    private array $offers = [];

    public function __construct(mixed $jsonArray)
    {
        foreach ($jsonArray as $jsonValue) {
            $this->offers[] = new Offer(
                $jsonValue['offerId'],
                $jsonValue['productTitle'],
                $jsonValue['vendorId'],
                $jsonValue['price'],
            );
        }
    }

    public function get(int $index): OfferInterface
    {
        assert(array_key_exists($index, $this->offers));

        return $this->offers[$index];
    }

    public function getIterator(): Iterator
    {
        return new ArrayIterator($this->offers);
    }
}
