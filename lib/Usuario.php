<?php
require_once 'conexao.php';

class Usuario extends DB{
  private $id,$nome,$email,$img,$senha,$status;

  public function setId($id){
    $this->id = $id;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function setImg($img){
    $this->img = $img;
  }
  public function setSenha($senha){
    $this->senha = $senha;
  }
  public function setStatus($status){
    $this->status = $status;
  }

  public function inserirUsuario($u){
    $sql = "insert into tb_usuarios(usr_nome,usr_email,usr_img,usr_senha,usr_status)
            values ('$u->nome','$u->email','$u->img','$u->senha',$u->status)";
    $stm = DB::prepare($sql);
    return $stm->execute();
  }
  public function login($email,$senha){
    $sql = "select usr_id from tb_usuarios where usr_email = '$email' and usr_senha = '$senha'";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetch();
  }

  public function listarUsuario($id){
    $sql = "select * from tb_usuarios where usr_id = $id";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetch();
  }
  public function listarUsuarios(){
    $sql = "select usr_id, usr_nome from tb_usuarios";
    $stm = DB::prepare($sql);
    $stm->execute();


    $ser = array();
    foreach ($stm->fetchAll() as $key => $value) {
      $ser['Lojas'][] = $value;
    }

    echo json_encode($ser);
  }
}
 ?>
