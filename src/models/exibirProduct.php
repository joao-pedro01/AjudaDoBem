<?php
require_once __DIR__.'/../../config/config.php';

$url = array_filter(explode('/',$_SERVER['REDIRECT_URL']));
$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

if($_SERVER['REDIRECT_URL'] == null || $url[1] == "index" || $url[1] == "home") {
    $productsDonation = DB::query("
        SELECT u.name, u.cell, p.title, p.description, c.category, i.path, pi.id
        FROM products_images pi

        INNER JOIN products p
        ON pi.id_product = p.id

        INNER JOIN images i
        ON pi.id_image = i.id

        INNER JOIN categorys c
        ON p.id_category = c.id

        INNER JOIN users u
        ON p.id_user = u.id

        WHERE p.type = 1 && p.is_active = 1
        LIMIT 8;
    ");
    $productsNecessity = DB::query("
        SELECT u.name, u.cell, u.cep, p.title, p.description, p.id_necessity, c.category, i.path, pi.id
        FROM products_images pi

        INNER JOIN products p
        ON pi.id_product = p.id

        INNER JOIN images i
        ON pi.id_image = i.id

        INNER JOIN categorys c
        ON p.id_category = c.id

        INNER JOIN users u
        ON p.id_user = u.id

        WHERE p.type = 2 && p.is_active = 1
        ORDER BY p.id_necessity DESC
        LIMIT 8;
    ");
}else if($busca != NULL && $url[1] == "doacoes"){
    $productsDonation = DB::query("
        SELECT u.name, u.cell, p.title, p.description, c.category, i.path
        FROM products_images pi

        INNER JOIN products p
        ON pi.id_product = p.id

        INNER JOIN images i
        ON pi.id_image = i.id

        INNER JOIN categorys c
        ON p.id_category = c.id

        INNER JOIN users u
        ON p.id_user = u.id

        WHERE p.type = 1 && p.is_active = 1 && p.title LIKE '%".str_replace(' ', '%', $busca)."%'
    ");
}else if($url[1] == "doacao"){
    $url = array_filter(explode('/', $_SERVER['REQUEST_URI']));
    $product = DB::query("
        SELECT u.name, u.cell, p.title, p.description, c.category, i.path
        FROM products_images pi

        INNER JOIN products p
        ON pi.id_product = p.id

        INNER JOIN images i
        ON pi.id_image = i.id

        INNER JOIN categorys c
        ON p.id_category = c.id

        INNER JOIN users u
        ON p.id_user = u.id
        
        WHERE pi.id =".$url[2]
    );
}else if ($url[1] == "doacoes") {
    $products = DB::query("
    SELECT u.name, u.cell, p.title, p.description, c.category, i.path
        FROM products_images pi

        INNER JOIN products p
        ON pi.id_product = p.id

        INNER JOIN images i
        ON pi.id_image = i.id

        INNER JOIN categorys c
        ON p.id_category = c.id
        
        INNER JOIN users u
        ON p.id_user = u.id
        
        WHERE p.type = 1 && p.is_active = 1
    ");
    }else if($url[1] == "atualizar-perfil") {
    $productsDonation = DB::query("
        SELECT p.title, p.description, c.category, i.path, pi.id
        FROM products_images pi

        INNER JOIN products p
        ON pi.id_product = p.id

        INNER JOIN images i
        ON pi.id_image = i.id

        INNER JOIN categorys c
        ON p.id_category = c.id

        INNER JOIN users u
        ON p.id_user = u.id

        WHERE p.type = 1 && p.id_user = {$_SESSION['UserId']}
    ");
}