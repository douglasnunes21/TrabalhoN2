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

            /**
             * Get the value of this
             */ 
            public function getId()
            {
                        return $this->id;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setId($id)
            {
                        $this->id = $id;

                        return $this;
            }

            public function getNome()
            {
                        return $this->nome;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setNome($nome)
            {
                        $this->nome = $nome;

                        return $this;
            }

            public function getEstado()
            {
                        return $this->estado;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setEstado($estado)
            {
                        $this->estado = $estado;

                        return $this;
            }

            public function getPais()
            {
                        return $this->pais;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setPais($pais)
            {
                        $this->pais = $pais;

                        return $this;
            }

            public function getCep()
            {
                        return $this->cep;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setCep($cep)
            {
                        $this->cep = $cep;

                        return $this;
            }
    }

?>