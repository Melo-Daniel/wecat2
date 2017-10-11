<?php
session_start();
if(!isset($_SESSION['usr'])){
  header('Location:index.php');
}

require_once 'lib/categoria.php';
require_once 'lib/Produto.php';
$c = new Categoria();

if(isset($_POST['adicionar'])){
  if($c->inserirCategoria($_POST['categoria'],$_SESSION['usr'])){
    header('Location:principal.php');
  }
}
if(isset($_POST['adicionarProduto'])){
  $p = new Produto();

  $p->setNome($_POST['nome']);
  $p->setDetalhes($_POST['detalhes']);
  $p->setPreco($_POST['preco']);
  $p->setStatus(1);
  $p->setUsuario($_SESSION['usr']);
  $p->setCategoria($_POST['categoria']);
  $p->setCodigo($_POST['codigo']);
  $p->setImg('asd.jpg');

  if($p->adicionarProduto($p)){
    header('Location:principal.php');
  }else{
    echo 'erro';
  }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WeCat | Jarros</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/codemirror/codemirror.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<script>
function adicionarProduto() {

  var nome = document.getElementById('nome').value;
  var detalhes = document.getElementById('detalhes').value;
  var preco = document.getElementById('preco').value;
  var codigo = document.getElementById('codigo').value;
  var categoria = document.getElementById('categoria').value;

  $.post("actions/ProdutoAC.php",
  {
      op:1,
      nome:nome,
      codigo:codigo,
      detalhes:detalhes,
      preco:preco,
      categoria:categoria
  },
  function(data,status){
    if(data == 'ok'){
      location.reload();
    }else{
      alert(data);
    }
  });

    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = "NEW CELL1";
    cell2.innerHTML = "NEW CELL2";
}
</script>

</head>

<body class="mini-navbar">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Daniel Melo</strong>
                            </span> <span class="text-muted text-xs block">Jarros<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        W+
                    </div>
                </li>
                <!--Inicio menu lateral-->
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Galeria</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="categoria.php">Categorias</a></li>
                        <li><a href="novoProduto.php">Produtos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-star-o"></i> <span class="nav-label">Destaques</span></span></a>
                </li>
                <!--Fim menu lateral-->
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Buscando por algo?" class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bem Vindo ao WeCat :-)</span>
                </li>

                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Sair
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">


                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">


            <div class="row m-b-lg m-t-lg">
                <div class="col-md-6">

                    <div class="profile-image">
                        <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                    </div>
                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    Jarros
                                </h2>
                                <h4>Os melhores e mais bonitos você só encontra aqui</h4>
                                <small>
                                    <button type="button" class="btn btn-link" name="button">Editar</button>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                  <span>Clique no botão abaixo para inserir uma nova Categoria!</span><br><br>
                  <button type="button" class="btn btn-primary" name="addcategoria"  data-toggle="modal" data-target="#novaCategoria">Nova Categoria</button>
                </div>
                  <div class="col-md-3">
                    <table class="table small m-b-xs">
                        <tbody>
                        <tr>
                            <td>
                                <strong>142</strong> Produtos
                            </td>
                            <td>
                                <strong>22</strong> Categorias
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <strong>61</strong> Clientes
                            </td>
                            <td>
                                <strong>54</strong> Views
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row">

              <div class="col-lg-9">
                <?php foreach ($c->listarCategorias($_SESSION['usr']) as $key => $value) {
                  ?>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="ibox float-e-margins collapsed">
                                  <div class="ibox-title">
                                      <h5><?php echo $value->cat_categoria ?></h5>
                                      <div class="ibox-tools collapse-link">
                                          <a class="collapse-link">
                                              <i class="fa fa-chevron-up"></i>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="ibox-content">
                                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                        <thead>
                                        <tr>

                                            <th data-toggle="true">Nome</th>
                                            <th data-hide="phone">Código</th>
                                            <th data-hide="all">Detalhes</th>
                                            <th data-hide="phone">Valor</th>
                                            <th data-hide="phone">Status</th>
                                            <th class="text-right" data-sort-ignore="true"></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $p = new Produto();
                                            foreach ($p->listarProdutosCategoria($_SESSION['usr'],$value->cat_id) as $key => $value1) {
                                              ?>


                                        <tr>
                                            <td>
                                               <?php echo $value1->pro_nome ?>
                                            </td>
                                            <td>
                                                <?php echo $value1->pro_codigo ?>
                                            </td>
                                            <td>
                                                <?php echo $value1->pro_detalhes ?>
                                            </td>
                                            <td>
                                                <?php echo $value1->pro_preco ?>
                                            </td>

                                            <td>
                                                <span class="label label-primary">Disponível</span>
                                            </td>

                                            <td class="text-right">
                                                <div class="btn-group">
                                                    <button class="btn-white btn btn-xs">Ver</button>
                                                    <button class="btn-white btn btn-xs">Editar</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php
                                      }
                                     ?>
                                        </tbody>
                                        <!-- Modal -->
                                        <div class="row">
                                          <div id="novoProduto<?php echo $value->cat_id?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <!-- Modal content-->
                                              <form method="post" class="form-horizontal" action="principal.php">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Novo Produto | <?php echo $value->cat_categoria ?></h4>
                                                </div>
                                                <div class="modal-body">
                                                  <input type="hidden" name="categoria" id="cat" value="<?php echo $value->cat_id ?>">
                                                  <div class="form-group"><label class="control-label">Nome</label>
                                                        <input type="text" class="form-control" name="nome" id="nome" value="" autofocus>
                                                  </div>
                                                  <div class="form-group"><label class="control-label">Codigo</label>
                                                        <input type="text" class="form-control" name="codigo" id="codigo" value="" autofocus>
                                                  </div>
                                                  <div class="form-group"><label class="control-label">Detalhes</label>
                                                        <input type="text" class="form-control" name="detalhes" id="detalhes" value="" autofocus>
                                                  </div>
                                                  <div class="form-group"><label class="control-label">Preço</label>
                                                        <input type="text" class="form-control" name="preco" id="preco" value="" autofocus>
                                                  </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="submit" class="btn btn-primary" name="adicionarProduto">Adicionar</button>
                                                </div>
                                              </div>
                                            </form>
                                            </div>
                                          </div>
                                        </div>
                                        <!--<tfoot>
                                        <tr>
                                            <td colspan="6">
                                                <ul class="pagination pull-right">
                                                  <li><a href="#">Adicionar Produto</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                      </tfoot>-->
                                    </table>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ibox float-e-margins collapsed">
                                              <ul class="pagination pull-right">
                                                <li><a href="#" class="collapse-link">Adicionar Produto</a></li>
                                              </ul>
                                                <!--<div class="ibox-title collapse-link">
                                                    <h5>Cadastre um novo Produto</h5>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link">
                                                            <i class="fa fa-chevron-up"></i>
                                                        </a>
                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                            <i class="fa fa-wrench"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-user">
                                                            <li><a href="#">Config option 1</a>
                                                            </li>
                                                            <li><a href="#">Config option 2</a>
                                                            </li>
                                                        </ul>
                                                        <a class="close-link">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div> -->
                                                <div class="ibox-content">
                                                    <form method="post" class="form-horizontal" action="novoProduto.php">
                                                        <div class="form-group"><label class="col-sm-2 control-label">Nome</label>
                                                            <div class="col-sm-10"><input type="text" name="nome" id="nome" class="form-control" required></div>
                                                        </div>
                                                        <div class="form-group"><label class="col-sm-2 control-label">Código</label>
                                                            <div class="col-sm-10"><input type="text" name="codigo" id="codigo" class="form-control"></div>
                                                        </div>
                                                        <div class="form-group"><label class="col-sm-2 control-label">Detalhes</label>
                                                            <div class="col-sm-10"><input type="text" name="detalhes" id="detalhes" class="form-control"></div>
                                                        </div>
                                                        <div class="form-group"><label class="col-sm-2 control-label">Valor</label>
                                                            <div class="col-sm-10"><input type="text" name="preco" id="preco" class="form-control"></div>
                                                        </div>
                                                        <div class="form-group"><label class="col-sm-2 control-label">Imagem</label>
                                                          <div class="col-sm-10">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                              <span class="btn btn-default btn-file"><span class="fileinput-new">Selecione um arquivo</span><span class="fileinput-exists">Mudar</span><input type="file" name="..."></span>
                                                              <span class="fileinput-filename"></span>
                                                              <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <div class="hr-line-dashed"></div>
                                                        <div class="form-group">
                                                                <button class="btn btn-primary" type="submit" style="float:right; margin-left:10px" name="salvar">Salvar</button>
                                                                <button class="btn btn-white" type="reset" style="float:right">Cancelar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
              </div>
              <?php
                }
              ?>
            </div>

            <div class="col-lg-3">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                                <h3>Destaques</h3>
                            <p class="small">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't.
                                <br/>
                                <br/>
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing
                            </p>

                            <p class="small font-bold">
                                <span><i class="fa fa-circle text-navy"></i> Válida</span>
                                </p>

                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
        </div>
        </div>

        <!-- Modal -->
          <div id="novaCategoria" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Nova Categoria</h4>
                </div>
                <div class="modal-body">

                  <form method="post" class="form-horizontal" action="principal.php">
                      <div class="form-group"><label class="control-label">Categoria</label>
                            <input type="text" class="form-control" name="categoria" id="categoria" value="" autofocus>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adicionar">Adicionar</button>
                      </div>
                  </form>

                </div>
              </div>
            </div>
          </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Jasny -->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- DROPZONE -->
    <script src="js/plugins/dropzone/dropzone.js"></script>

    <!-- CodeMirror -->
    <script src="js/plugins/codemirror/codemirror.js"></script>
    <script src="js/plugins/codemirror/mode/xml/xml.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <script>
        $(document).ready(function() {


            $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 48], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#1ab394',
                fillColor: "transparent"
            });


        });
    </script>

</body>

</html>
