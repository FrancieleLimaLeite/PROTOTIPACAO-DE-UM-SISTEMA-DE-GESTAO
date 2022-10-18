<?php
session_start();
?>

<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.11
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Sistema</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="img/logo.jpeg" width="70" height="50">
        
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      

    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              
              <a class="nav-link" href="acesso.adm.php">
                <i class="nav-icon icon-speedometer"></i> Voltar
                
              </a>
            </li>
            <li class="nav-title">Cadastro</li>
            <li class="nav-item">
              <a class="nav-link" href="cadstro.aluno.php">
                <i class="nav-icon icon-drop"></i> Atendido</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cad.prof.php">
                <i class="nav-icon icon-pencil"></i> Oficineiro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cad.vol.php">
                <i class="nav-icon icon-pencil"></i> Voluntário/Benfeitor</a>
            </li><li class="nav-item">
              <a class="nav-link" href="cad.disciplina.php">
                <i class="nav-icon icon-pencil"></i> Oficina</a>
            </li>
          
            <li class="nav-title">Indices</li>
         <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-puzzle"></i> Frequencia</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="buscaoficina.php">
                <i class="nav-icon icon-puzzle"></i> Lista de oficinas</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="buscaluno.php">
                <i class="nav-icon icon-puzzle"></i> Lista de Atendidos</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="buscaprof.php">
                <i class="nav-icon icon-puzzle"></i> Lista de Oficineiros</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="buscavol.php">
                <i class="nav-icon icon-puzzle"></i> Lista de Voluntarios</a>
            </li>

         
            
            
            
           
          
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i> </a>
              <a class="btn" href="#">
                <i class="icon-settings"></i> </a>
            </div>
          </li>
       
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              
              <!-- /.col-->
            
            </div>
            <!-- /.row-->
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0"><b> FICHA DE INSCRIÇÃO </b></h4><br>
                                 <?php
                                  if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  }
                                  ?>
                        <form method="post" id="fContato" action="processa.aluno.php" oninput="calc_total();">
                            <fieldset id="aluno"><legend>Informações obrigatórias</legend><br>
                              <p><label for="cData">Data da Inscrição:</label>
                              <input type="date" name="aData" id="cData"/></p>
                                
                              <p> <label for="cResp">Responsável pela Inscrição:</label> 
                               <input type="text" name="aResp" id= "cResp" size="60" maxlength="50" placeholder="Nome Completo"/></p>
                                
                               <p> <label for="cNome">Nome do Atendido:</label> 
                               <input type="text" name="aNome" id= "cNome" size="60" maxlength="50" placeholder="Nome Completo"/></p>
                               
                                <p><label for="cNasc">Data de Nascimento:</label>
                              <input type="date" name="aNasc" id="cNasc"/></p>

                               <p><label for="cRua"> Endereço:</label> 
                               <input type="text" name="aRua" id="cRua" size="60" maxlength="80" placeholder="Rua, Av, Trav, ..."/></p>

                               <p><label for="cBairro"> Bairro:</label> 
                               <input type="text" name="aBairro" id="cBairro" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cCep"> Cep:</label> 
                               <input type="text" name="aCep" id="cCep" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cRg"> RG ou Certidão de Nascimento:</label> 
                               <input type="text" name="aRg" id="cRg" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cTel"> Telefone / Celular:</label> 
                               <input type="text" name="aTel" id="cTel" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cGrau"> Grau de Escolaridade:</label> 
                               <input type="text" name="aGrau" id="cGrau" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cStud"> Escola em que estuda:</label> 
                               <input type="text" name="aStud" id="aStud" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cMae"> Nome da Mãe/Responsável:</label> 
                               <input type="text" name="aMae" id="cMae" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cPai"> Nome do Pai/Responsável:</label> 
                               <input type="text" name="aPai" id="cPai" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cCurso"> Oficina(s) a participar:</label> 
                               <input type="text" name="aOficina" id="cCurso" size="60" maxlength="80" placeholder=""/></p>

                               <p><label for="cTurno"> Turno a estudar no projeto:</label><br>
                                  <input type="text" name="aTurno" id="cTurno" size="60" maxlength="80" placeholder=""/></p>

                                 <p><label for="cCurso"> Ponto de ônibus:</label> 
                               <input type="text" name="aPonto" id="cCurso" size="60" maxlength="80" placeholder=""/></p>

                                <p><label for="cObs"> Observações:</label>
                               <textarea name="aObs" id="aObs" cols="60" rows="8" placeholder="Observacões sobre o Atendido(a)"></textarea></p>
                              </fieldset>


                             <button type="buttom" class="btn btn-primary" id="btn_login">Salvar</button>

                        </form>
                    
                  </div>
                  
                </div>
               
                <div class="chart-wrapper" style="height:20px;margin-top:10px;">
                  <canvas class="chart" id="main-chart" height="300"></canvas>
                </div>
              </div>
              
            </div>
    
      </main>
     
        
             
            <small class="text-muted">25GB/256GB</small>
          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">Arte pela Vida</a>
        <span>&copy; 2019.</span>
      </div>
     
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
