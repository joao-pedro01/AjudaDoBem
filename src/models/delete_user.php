<?php
require_once __DIR__.'/../../config/config.php';
include_once '../controllers/functions.php';

    $products = DB::query("SELECT id FROM products WHERE id_user=%i", $_SESSION['UserId']);
    $user = DB::query("SELECT * FROM users WHERE id=%i", $_SESSION['UserId']);

    foreach($products as $product) {
        DB::delete('products_images', 'id_product=%i', $product['id']);
    }
    /*
        INSERT USER IN TABLE USERS
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
        //DB::update('tbl', ['age' => 25, 'height' => 10.99], "name=%s", $name);
        // DB::delete();
        // if($user['id_image'] != 1 && $user['id_image'] != 2) {
        //     DB::delete('images', 'id=%i', $user['id_image']);
        // }
        // DB::delete('users', 'id=%i', $_SESSION['UserId']);
        // DB::disconnect();
        // session_destroy();
        // header("location: ../index.php");
    }catch(Exception $e) {
        dd($e);
    }