<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Style -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="src/bootstrap4/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="src/css/style.css"/>

  <!-- Script -->
  <script src="src/js/jquery-3.7.1.min.js"></script>
  <script src="src/bootstrap4/js/bootstrap.bundle.min.js"></script>
  <script src="src/js/script.js"></script>

  <title>Dashboard</title>
</head>
<body>

  <!-- Menu -->
  <div class="nav-side-menu">
    <div class="brand">LOGO AQUI</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

      <ul id="menu-content" class="menu-content collapse out">
        <li>
          <a href="#"><i class="fa fa-tachometer-alt sidebar-icon"></i> Dashboard</a>
        </li>
        <li data-toggle="collapse" data-target="#ajuda" class="collapsed">
          <a href="#"><i class="fa fa-life-ring sidebar-icon"></i> Ajuda <span class="arrow"><i class="fa fa-angle-down"></i></span></a>
        </li>
      </ul>

      <ul class="sub-menu collapse" id="ajuda">
        <li><a href="#" id="documentacao"><i class="fa fa-angle-right"></i> Documentação</a></li>
        <li><a href="#" id="suporte"><i class="fa fa-angle-right"></i> Suporte <small><i class="fa fa-external-link"></small></i></a></li>
      </ul>

    </div>
  </div>

  <!-- Páginas -->
  <main class="main" id="pagina">
    <div class="container">
      <div class="row">
        <div class="col">

          <form action="" method="post">
            <div class="form-group row">
              <label class="col-sm-9 col-form-label">Competência:</label>
              <div class="col-sm-3">
                <select name="" id="competencia" class="form-control-plaintext">
                  <option value="">-- Selecione --</option>
                  <option value="2023-08">Agosto / 2023</option>
                  <option value="2023-09">Setembro / 2023</option>
                  <option value="2023-10">Outubro / 2023</option>
                </select>
              </div>
            </div>
          </form>
          <hr/>

        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Número de vendas</div>
            <div class="card-body">
              <h5 id="numeroVendas" class="card-title">?</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Total de vendas</div>
            <div class="card-body">
              <h5 id="totalVendas" class="card-title">?</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Clientes ativos</div>
            <div class="card-body">
              <h5 id="clientesAtivos" class="card-title">?</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Clientes inativos</div>
            <div class="card-body">
              <h5 id="clientesInativos" class="card-title">?</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Total de reclamações</div>
            <div class="card-body">
              <h5 id="totalReclamacoes" class="card-title">?</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Total de elogios</div>
            <div class="card-body">
              <h5 id="totalElogios" class="card-title">?</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Total de sugestões</div>
            <div class="card-body">
              <h5 id="totalSugestoes" class="card-title">?</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Total de despesas</div>
            <div class="card-body">
              <h5 id="totalDespesas" class="card-title">?</h5>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

</body>

</html>