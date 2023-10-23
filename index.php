<?php require 'inc/head.php'; ?>
<?php require 'inc/navbar.php'; ?>
<?php 
    if(!isset($_GET['vista']) || $_GET['vista']==""){
        $_GET['vista']="inicio";
    }
    if (is_file("./vista/".$_GET['vista'].".php") && $_GET['vista']!="404") {
        
        require 'vista/'.$_GET['vista'].'.php'; 
    }else{
        include "vista/404.php";
    }
?>
<?php require 'inc/footer.php'; ?>
