<?php

declare(strict_types=1);


interface OfferCollectionInterface
{
    public function get(int $index): OfferInterface;

    public function getIterator(): Iterator;
}
