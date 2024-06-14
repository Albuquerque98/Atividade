<?php
require_once 'Atividade.php';
class Carro extends Veiculo {
    private $velocidade;

    public function __construct($cor, $modelo, $velocidade) {
        parent::__construct($cor, $modelo);
        $this->velocidade = $velocidade;

    }
    
    public function exibirDetalhes() {
        parent::exibirDetalhes();
        echo "Velocidade: " . $this->velocidade ."<br>";
    }

}

class Moto extends Veiculo {
    private $velocidade;

    public function __construct($cor, $modelo, $velocidade) {
        parent::__construct($cor, $modelo);
        $this->velocidade = $velocidade;

    }
    
    public function exibirDetalhes() {
        parent::exibirDetalhes();
        echo "Velocidade: " . $this->velocidade ."<br>";
    }

}

?>