<?php

require_once __DIR__.'/../../config/config.php';

$productsDonation = DB::query("
    SELECT * FROM products_images pi

    INNER JOIN products p
    ON pi.id_product = p.id

    INNER JOIN images
    ON pi.id_image = images.id

    INNER JOIN categorys
    ON p.id_category = categorys.id

    INNER JOIN users u
    ON p.id_user = u.id

    where type = 1

");
$productsNecessity = DB::query("
    SELECT * FROM products_images pi

    INNER JOIN products p
    ON pi.id_product = p.id

    INNER JOIN images
    ON pi.id_image = images.id

    INNER JOIN categorys
    ON p.id_category = categorys.id

    INNER JOIN users u
    ON p.id_user = u.id

    where type = 2

");