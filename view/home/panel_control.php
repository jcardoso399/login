<?php
    require_once("c://xampp/htdocs/login/index.html");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>