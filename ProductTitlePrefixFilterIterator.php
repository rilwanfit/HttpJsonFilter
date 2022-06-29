<?php

declare(strict_types=1);

final class ProductTitlePrefixFilterIterator extends FilterIterator
{
    public function __construct(
        Iterator $iterator,
        private string $prefix
    ) {
        parent::__construct($iterator);
    }

    public function accept(): bool
    {
        return str_starts_with(
            parent::current()->getProductTitle(),
            $this->prefix
        );
    }
}
