<?php
require_once 'conexao.php';

class Produto extends DB{
  private $id,$nome,$detalhes,$preco,$status,$usuario,$categoria,$img,$codigo;

  public function setId($id){
    $this->id = $id;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }
  public function setDetalhes($detalhes){
    $this->detalhes = $detalhes;
  }
  public function setPreco($preco){
    $this->preco = $preco;
  }
  public function setStatus($status){
    $this->status = $status;
  }
  public function setUsuario($usuario){
    $this->usuario = $usuario;
  }
  public function setCategoria($categoria){
    $this->categoria = $categoria;
  }
  public function setImg($img){
    $this->img = $img;
  }
  public function setCodigo($codigo){
    $this->codigo = $codigo;
  }

  public function adicionarProduto($p){
    $sql = "insert into tb_produtos (pro_nome,pro_detalhes,pro_preco,pro_status,pro_usr_id,pro_cat_id,pro_img,pro_codigo) values
            ('$p->nome','$p->detalhes',$p->preco,$p->status,$p->usuario,$p->categoria,'$p->img','$p->codigo')";
    $stm = DB::prepare($sql);
    return $stm->execute();
  }

  public function listarProdutos($usr){
    $sql = "select * from tb_produtos where pro_status = 1 and pro_usr_id  = $usr";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }
  public function listarProdutosCategoria($usr,$categoria){
    $sql = "select * from tb_produtos join tb_categorias on (cat_id = pro_cat_id) where cat_id = $categoria and cat_usr_id = $usr";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }

  public function listarProdutosSV($usr){
    $sql = "select * from tb_produtos where pro_status = 1 and pro_usr_id  = $usr";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }
}
?>
