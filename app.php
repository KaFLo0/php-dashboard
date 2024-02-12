<?php

// Classe dashboard
class Dashboard {
  public $data_inicio;
  public $data_fim;
  public $numero_vendas;
  public $total_vendas;
  public $clientes_ativos;
  public $clientes_inativos;
  public $total_reclamacoes;
  public $total_elogios;
  public $total_sugestoes;
  public $total_despesas;

  public function __get($name) {
    return $this->$name;
  }

  public function __set($name, $value) {
    $this->$name = $value;
    return $this;
  }
}

// Classe de conexão ao banco de dados
class Conexao {
  private $host = 'localhost';
  private $dbname = 'dashboard';
  private $username = 'root';
  private $password = '';

  public function conectar() {
    try {
      $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname",
        "$this->username",
        "$this->password"
      );

      $conexao->exec('set charset utf8');

      return $conexao;

    } catch (PDOException $e) {
      echo '<p>'. $e->getMessage() . '</p>';
    }
  }
}

class Bd {
  private $conexao;
  private $dashboard;

  public function __construct(Conexao $conexao, Dashboard $dashboard) {
    $this->conexao = $conexao->conectar();
    $this->dashboard = $dashboard;
  }

  // SELECT COUNT(*) as numero_vendas FROM tb_vendas WHERE data_venda BETWEEN '2023-10-01' AND '2023-10-31'
  public function getNumeroVendas() {
    $query = "SELECT COUNT(*) as numero_vendas FROM tb_vendas WHERE data_venda BETWEEN :data_inicio AND :data_fim";

    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue('data_inicio', $this->dashboard->__get('data_inicio'));
    $stmt->bindValue('data_fim', $this->dashboard->__get('data_fim'));
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
  }

  public function getTotalVendas() {
    $query = "SELECT SUM(total) as total_vendas FROM tb_vendas WHERE data_venda BETWEEN :data_inicio AND :data_fim";

    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue('data_inicio', $this->dashboard->__get('data_inicio'));
    $stmt->bindValue('data_fim', $this->dashboard->__get('data_fim'));
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
  }

  public function getTotalClientesAtivos() {
    $query = "SELECT COUNT(*) as total_clientes FROM tb_clientes WHERE cliente_ativo = 1";

    $stmt = $this->conexao->prepare($query);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_clientes;
  }

  public function getTotalClientesInativos() {
    $query = "SELECT COUNT(*) as total_clientes FROM tb_clientes WHERE cliente_ativo = 0";

    $stmt = $this->conexao->prepare($query);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_clientes;
  }

  public function getTotalReclamacoes() {
    $query = "SELECT COUNT(*) as total_reclamacoes FROM tb_contatos WHERE tipo_contato = 1";

    $stmt = $this->conexao->prepare($query);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_reclamacoes;
  }

  public function getTotalSugestoes() {
    $query = "SELECT COUNT(*) as total_sugestoes FROM tb_contatos WHERE tipo_contato = 2";

    $stmt = $this->conexao->prepare($query);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_sugestoes;
  }

  public function getTotalElogios() {
    $query = "SELECT COUNT(*) as total_elogios FROM tb_contatos WHERE tipo_contato = 3";

    $stmt = $this->conexao->prepare($query);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_elogios;
  }

  public function getTotalDespesas() {
    $query = "SELECT SUM(total) as total_despesas FROM tb_despesas WHERE data_despesa BETWEEN :data_inicio AND :data_fim";

    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue('data_inicio', $this->dashboard->__get('data_inicio'));
    $stmt->bindValue('data_fim', $this->dashboard->__get('data_fim'));
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ)->total_despesas;
  }
}

// Lógica do script
$dashboard = new Dashboard();

$conexao = new Conexao();

// As datas estão hardcode por hora!
$dashboard->__set('data_inicio', '2023-10-01');
$dashboard->__set('data_fim', '2023-10-31');

$bd = new Bd($conexao, $dashboard);

$dashboard->__set('numero_vendas', $bd->getNumeroVendas());
$dashboard->__set('total_vendas', $bd->getTotalVendas());
$dashboard->__set('clientes_ativos', $bd->getTotalClientesAtivos());
$dashboard->__set('clientes_inativos', $bd->getTotalClientesInativos());
$dashboard->__set('total_reclamacoes', $bd->getTotalReclamacoes());
$dashboard->__set('total_sugestoes', $bd->getTotalSugestoes());
$dashboard->__set('total_elogios', $bd->getTotalElogios());
$dashboard->__set('total_despesas', $bd->getTotalDespesas());

echo '<pre>';
print_r($dashboard);
echo '</pre>';

?>