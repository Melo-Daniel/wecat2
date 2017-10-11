<?php
require_once '..\lib\Produto.php';

$op = $_POST['op'];

switch ($op) {
  case 1:
    $p = new Produto();

    $p->setNome($_POST['nome']);
    $p->setDetalhes($_POST['detalhes']);
    $p->setPreco($_POST['preco']);
    $p->setStatus(1);
    $p->setUsuario($_POST['usuario']);
    $p->setCategoria($_POST['categoria']);
    $p->setCodigo($_POST['codigo']);
    $p->setImg('asd.jpg');

    if($p->adicionarProduto($p)){
      echo 'ok';
    }else{
      echo 'erro';
    }
    break;

  default:
    # code...
    break;
}
?>
