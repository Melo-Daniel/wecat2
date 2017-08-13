<?php
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WeCat | Jarros</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
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

                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Minha Galeria</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="categoria.php">Categorias</a></li>
                        <li><a href="novoProduto.php">Produtos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-dollar"></i> <span class="nav-label">Ofertas</span></span></a>
                </li>
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
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
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
        <div class="wrapper wrapper-content animated fadeInRight">


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
                                    Detalhes
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
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
                <div class="row">
                    <div class="col-lg-12">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="ibox float-e-margins">
                                  <div class="ibox-title">
                                      <h5>Categoria 1</h5>
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
                                  </div>
                                  <div class="ibox-content">
                                      <div class="carousel slide" id="carousel3">
                                          <div class="carousel-inner">
                                              <div class="item gallery active left">
                                                  <div class="row">
                                                      <div class="col-sm-6">
                                                          <img alt="image" class="img-responsive" src="img/p_big1.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image" class="img-responsive" src="img/p_big2.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive"  src="img/p_big3.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive" src="img/p_big1.jpg">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="item gallery next left">
                                                  <div class="row">
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive" src="img/p_big3.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive" src="img/p_big1.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive"  src="img/p_big2.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive" src="img/p_big1.jpg">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="item gallery">
                                                  <div class="row">
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive" src="img/p_big2.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive" src="img/p_big3.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image"  class="img-responsive"  src="img/p_big1.jpg">
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <img alt="image" class="img-responsive" src="img/p_big2.jpg">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a data-slide="prev" href="#carousel3" class="left carousel-control">
                                              <span class="icon-prev"></span>
                                          </a>
                                          <a data-slide="next" href="#carousel3" class="right carousel-control">
                                              <span class="icon-next"></span>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
              </div>

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



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

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
