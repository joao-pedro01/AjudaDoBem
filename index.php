<?php 
    session_start();
    require_once 'src/controllers/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<body>
    <?php
        $url = (isset($_GET['url'])) ? $_GET['url']:'home.php';
        $url = array_filter(explode('/',$url));
        if($url[0] == "style"){
            $file = 'src/views/styles/'.$url[1];
        }else {
            $file = 'src/views/'.$url[0].'.php';
        }
        
        if(is_file($file)){
            include $file;
        }else{
            echo '404.php aa';
        }
    ?>
</body>
</html>