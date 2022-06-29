<?php

declare(strict_types=1);


final class VendorIdFilterIterator extends FilterIterator
{
    public function __construct(Iterator $productIterator,
                                private int $vendorId
    ) {
        parent::__construct($productIterator);
    }

    public function accept(): bool
    {
        return parent::current()->getVendorId() === $this->vendorId;
    }
}
