<?php

    class Pet{

        private $id;
        private $nome;
        private $id_tutor;
        private $raca;
        private $idade;
        private $inf_ad;

        public function __construct($nome=null, $id_tutor=null, $raca=null, $idade=null, $inf_ad=null)
        {
            $this->nome = $nome;
            $this->id_tutor = $id_tutor;
            $this->raca = $raca;
            $this->idade = $idade;
            $this->inf_ad = $inf_ad;
        }



        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }


        /**
         * Get the value of raca
         */ 
        public function getRaca()
        {
                return $this->raca;
        }

        /**
         * Set the value of raca
         *
         * @return  self
         */ 
        public function setRaca($raca)
        {
                $this->raca = $raca;

                return $this;
        }

        /**
         * Get the value of idade
         */ 
        public function getIdade()
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         *
         * @return  self
         */ 
        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }

        /**
         * Get the value of inf_ad
         */ 
        public function getInf_ad()
        {
                return $this->inf_ad;
        }

        /**
         * Set the value of inf_ad
         *
         * @return  self
         */ 
        public function setInf_ad($inf_ad)
        {
                $this->inf_ad = $inf_ad;

                return $this;
        }

        /**
         * Get the value of id_tutor
         */ 
        public function getId_tutor()
        {
                return $this->id_tutor;
        }

        /**
         * Set the value of id_tutor
         *
         * @return  self
         */ 
        public function setId_tutor($id_tutor)
        {
                $this->id_tutor = $id_tutor;

                return $this;
        }
    }
?>