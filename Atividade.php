<?php
    class Veiculo {
        
        protected $cor;
        protected $modelo;

        public function __construct($cor, $modelo) {
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        public function exibirDetalhes(){
            //Exibir as informações
            echo "Cor: " . $this->cor . "<br>";
            echo "Modelo: " . $this->modelo ."<br>";
        }
    }

    ?>


