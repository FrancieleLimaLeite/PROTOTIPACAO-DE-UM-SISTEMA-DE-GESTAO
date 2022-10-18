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
        
          <div style="left: 300px; top: 150px; width: 450px; height: 220px">
            <div id="Layer1" style="position:absolute; left:210px; top:70px; width:300; height:90; z-index:0; overflow: auto">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0"><b> ATENDIDOS CADASTRADOS: </b></h4><br>
                               
                             <form method="post">
                             <p> <label for="cName">Filtrar:</label>
                             <input type="text" name="filtro" size="40" maxlength="20" placeholder="Digite o campo que deseja filtrar"/>
                             <button type="buttom" class="btn btn-primary" id="btn_login">OK</button></p>
                             </form>

                                  <form action='buscaluno.php' method='post'>
                                  <table width='1900' border='1'>
                                  <tr>
                                  <th> Ação </th>
                                  <th> ID </th>
                                  <th> Data </th>
                                  <th> Responsavel pela inscrição </th>
                                  <th> Nome </th>
                                  <th> Nasc </th>
                                  <th> Endereço </th>
                                  <th> Bairro </th>
                                  <th> CEP </th>
                                  <th> RG </th>
                                  <th> Telefone </th>
                                  <th> Grau escolaridade </th>
                                  <th> Escola em que estuda </th>
                                  <th> Nome da mãe </th>
                                  <th> Nome do pai </th>
                                  <th> Ofina(s) </th>
                                  <th> Turno </th>
                                  <th> Ponto de ônibus </th>
                                  <th> Observações </th>
                                  <tr>

                                  <?php 
                                  include_once("conexao.php");
                                   $filtro_sql= "";

                                   if ($_POST != NULL) {
                                     $filtro = $_POST['filtro'];
                                     $filtro_sql = "WHERE data_inscricao LIKE '%$filtro%'
                                                     or resp_inscricao LIKE '%$filtro%'
                                                     or nome LIKE '%$filtro%'
                                                     or nasc LIKE '%$filtro%'
                                                     or endereco LIKE '%$filtro%'
                                                     or bairro LIKE '%$filtro%'
                                                     or cep LIKE '%$filtro%'
                                                     or rg LIKE '%$filtro%'
                                                     or telefone LIKE '%$filtro%'
                                                     or grau_esc LIKE '%$filtro%'
                                                     or escola LIKE '%$filtro%'
                                                     or mae LIKE '%$filtro%'
                                                     or pai LIKE '%$filtro%'
                                                     or ofic_est LIKE '%$filtro%'
                                                     or turno LIKE '%$filtro%'
                                                     or ponto_onibus LIKE '%$filtro%'";
                                   }
                                    if (isset($_POST['del'])) {
                                       foreach ($_POST['del'] as $codigo) {
                                         $sql= "delete from aluno where id_aluno=$codigo";
                                         $res= mysqli_query($conecta, $sql);

                                    if ($sql) {
                                      echo "<script>
                                           alert('Atendido excluído com sucesso!');
                                            </script>";
                                    }else{
                                      echo "<script>
                                           alert('Atendido não foi ecluído com sucesso!');
                                            </script>";
}
                                       }
                                     } else{


                                     }



                                  $sql = "SELECT * FROM aluno $filtro_sql";
                                  $result = mysqli_query($conecta, $sql) or die ("Erro ao obter resposta");


                                  while ($registro = mysqli_fetch_array($result)) {
                                    $id = $registro['id_aluno'];
                                    $data = $registro['data_inscricao'];
                                    $responsavel = $registro['resp_inscricao'];
                                    $nome = $registro['nome'];
                                    $nasc = $registro['nasc'];
                                    $end = $registro['endereco'];
                                    $bairro = $registro['bairro'];
                                    $cep = $registro['cep'];
                                    $rg = $registro['rg'];
                                    $tel = $registro['telefone'];
                                    $grau = $registro['grau_esc'];
                                    $esc = $registro['escola'];
                                    $mae = $registro['mae'];
                                    $pai = $registro['pai'];
                                    $ofic_est = $registro['ofic_est'];
                                    $turno = $registro['turno'];
                                    $ponto = $registro['ponto_onibus'];
                                    $obs = $registro['obs'];
                                    
                                  

                                    echo "<tr>";
                                    echo "<td><input type='checkbox' value='$id' name='del[]' id='checkbox[]'</td>";
                                    echo "<td>".$id. "</td>";
                                    echo "<td>".$data. "</td>";
                                    echo "<td>".$responsavel. "</td>";
                                    echo "<td>".$nome. "</td>";
                                    echo "<td>".$nasc. "</td>";
                                    echo "<td>".$end. "</td>";
                                    echo "<td>".$bairro. "</td>";
                                    echo "<td>".$cep. "</td>";
                                    echo "<td>".$rg. "</td>";
                                    echo "<td>".$tel. "</td>";
                                    echo "<td>".$grau. "</td>";
                                    echo "<td>".$esc. "</td>";
                                    echo "<td>".$mae. "</td>";
                                    echo "<td>".$pai. "</td>";
                                    echo "<td>".$ofic_est. "</td>";
                                    echo "<td>".$turno. "</td>";
                                    echo "<td>".$ponto. "</td>";
                                    echo "<td>".$obs. "</td>";
                                    echo "</tr>";
                                  }
                                  mysqli_close($conecta);
                                  echo "</table>";

                                  ?>
                                  </table>
                                  <br><br>
                                   <button type="buttom" class="btn btn-primary" id="btn_login">Excluir</button>
                                  
                                  </form>
                      
                    
                  </div>
                  
                </div>
               
                <div class="chart-wrapper" style="height:50px;margin-top:30px;">
                  <canvas class="chart" id="main-chart" height="500" width="50000"></canvas>
                </div>
              </div>
              
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
