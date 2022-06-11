<?php

require_once __DIR__.'/../../config/config.php';

$products = DB::query("
    SELECT * FROM products_images

    INNER JOIN products
    ON products_images.id_product = products.id

    INNER JOIN images
    ON products_images.id_image = images.id

    INNER JOIN categorys
    ON products.id_category = categorys.id

    LIMIT 8;
");