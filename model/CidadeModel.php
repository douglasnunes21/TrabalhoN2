<?php

    class Cidade{

        private $id;
        private $nome;
        private $estado;
        private $pais;
        private $cep;

        public function __construct($nome=null, $estado=null, $pais=null, $cep=null)
        {
            $this->nome = $nome;
            $this->estado = $estado;
            $this->pais = $pais;
            $this->cep = $cep;
        }

        








    }

?>