<?php

include './includes/header.php';


if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    include './includes/filmes_detalhe.php';
} else {
    header('location:index.php');
}
//slk so da erro nessa merda
include_once './includes/footer.php'
//rlx paulinho deu certo👌
?>
