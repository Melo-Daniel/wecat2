<?php
require_once '../lib/categoria.php';

$u = new Categoria();
$usr = $_GET['usr'];

$u->listarCategoriasSV($usr);
 ?>
