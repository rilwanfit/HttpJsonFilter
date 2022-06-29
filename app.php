<?php
declare(strict_types=1);

spl_autoload_register(function (string $className) {
    require_once $className . '.php';
});

$httpReader = new HttpReader();
$offerCollection = $httpReader->read(file_get_contents($_SERVER['OFFERS_ENDPOINT']));
$productIterator = $offerCollection->getIterator();

$subcommand2FilterMapping = [
    'count_by_price_range' => function (Iterator $productIterator, array $argv) {
        return new PriceFilterIterator($productIterator, floatval($argv[2]), floatval($argv[3]));
    },
    'count_by_vendor_id' => function(Iterator $productIterator, array $argv) {
        return new VendorIdFilterIterator($productIterator, intval($argv[2]));
    },
    'count_by_title_prefix' => function(Iterator $productIterator, array $argv) {
        return new ProductTitlePrefixFilterIterator($productIterator,$argv[2]);
    },
];

echo iterator_count($subcommand2FilterMapping[$argv[1]]($productIterator, $argv));
