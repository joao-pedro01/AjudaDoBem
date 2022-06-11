<?php
session_start();
require_once __DIR__.'/../../config/config.php';
include_once '../controllers/functions.php';

    $products = DB::query("SELECT id FROM products WHERE id_user=%i", $_SESSION['UserId']);
    $user = DB::query("SELECT * FROM users WHERE id=%i", $_SESSION['UserId']);

    foreach($products as $product) {
        DB::delete('products_images', 'id_product=%i', $product['id']);
    }
    /*
        ALTER user and products is_active == false
    */
    try{
        DB::update('products',[
            'is_active' => false,
            'modified' => date('Y-m-d H:i:s')
        ], 'id_user=%i', $_SESSION['UserId']);
        DB::update('users',[
            'is_active' => false,
            'modified' => date('Y-m-d H:i:s')
        ], 'id=%i', $_SESSION['UserId']);
        DB::disconnect();
        
        session_destroy();
        header("location: ../index.php");
    }catch(Exception $e) {
        dd($e);
    }