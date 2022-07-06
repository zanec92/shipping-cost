<?php

use App\Entities\Package;
use App\Components\View;

const PROJECT_DIRECTORY = __DIR__;

require PROJECT_DIRECTORY . '/vendor/autoload.php';

$deliveries = require PROJECT_DIRECTORY . '/config/delivery-services.php';

if (!isset($_GET['weight'])) {
    die('Parameter `weight` is not set.');
}
if (!filter_input(INPUT_GET, 'weight', FILTER_VALIDATE_FLOAT)) {
    die('Parameter `weight` is not float.');
}
if ($_GET['weight'] <= 0) {
    die('Parameter `weight` cannot be zero or less.');
}

$package = new Package;
$package->setWeight($_GET['weight']);

foreach ($deliveries as $deliveryClass) {
    $delivery = new $deliveryClass;
    $shippingCost[$delivery->getName()] = $delivery->calculateShippingCost($package);
}

echo (new View)->render('templates/shipping-cost.php', [
    'shippingCost' => $shippingCost,
]);
