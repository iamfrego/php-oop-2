<?php

require __DIR__ . '/classes/user.php';
require __DIR__ . '/classes/premiumUser.php';
require __DIR__ . '/classes/product.php';

$product_1 = new Product(
    'MacBook Air M1',
    'Apple PC Portatile MacBook Air 2020: Chip Apple M1',
    1249.00,
    'Notebook',
);



$user_1 = new User('fregopnx', 'Matteo', 'Fregonese', 'mate_freg@tiscali.it');
$user_1->setPassword('qwerty123');



$user_premium_1 = new PremiumUser('iamfrego', 'Fregonese', 'Matteo', 'mate_freg@gmai.com');


$user_premium_1->setPassword('QWERTY123');


$user_premium_1->setDiscount('premium');



var_dump($product_1, $user_1, $user_premium_1);