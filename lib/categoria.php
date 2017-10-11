<?php
require_once 'conexao.php';

class Categoria extends DB{
  private $id , $categoria,$usr, $status;

  public function setId($id){
    $this->id = $id;
  }
  public function setCategoria($categoria){
    $this->categoria = $categoria;
  }
  public function setUsr($usr){
    $this->usr = $usr;
  }
  public function setStatus($status){
    $this->status = $status;
  }

  public function inserirCategoria($categoria,$usr){
    $sql = "insert into tb_categorias(cat_categoria,cat_status,cat_usr_id) values ('$categoria',1,$usr)";
    $stm = DB::prepare($sql);
    return $stm->execute();
  }
  public function listarCategorias($usr){
    $sql = "select * from tb_categorias where cat_status = 1 and cat_usr_id = $usr";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }

  public function listarCategoriasSV($usr){
    $sql = "select * from tb_categorias where cat_status = 1 and cat_usr_id = $usr";
    $stm = DB::prepare($sql);
    $stm->execute();

    $ser = array();
    foreach ($stm->fetchAll() as $key => $value) {
      $ser['Categorias'][] = $value;
    }

    echo json_encode($ser);

  }
}
 ?>
