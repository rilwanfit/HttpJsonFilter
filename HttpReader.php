<?php

declare(strict_types=1);


final class HttpReader
{

    public function __construct()
    {
    }

    public function read(string $input): OfferCollectionInterface
    {
        return new OfferCollection(json_decode($input, true));
    }
}
