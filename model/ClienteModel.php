<?php

    class Cliente{

        private $id;
        private $nome;
        private $nacionalidade;
        private $cpf;
        private $email;
        private $telefone;
        private $rua;
        private $numero;
        private $complemento;
        private $cidade;
        

        public function __construct($nome=null, $nacionalidade=null, $cpf=null, $email=null, $telefone=null, $rua=null, $numero=null, $complemento=null, $cidade=null)
        {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->telefone = $telefone;
            $this->rua = $rua;
            $this->numero = $numero;
            $this->complemento = $complemento;
            $this->cidade = $cidade;
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

            public function getNacionalidade()
            {
                        return $this->nacionalidade;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setNacionalidade($nacionalidade)
            {
                        $this->nacionalidade = $nacionalidade;

                        return $this;
            }

            public function getCpf()
            {
                        return $this->cpf;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setCpf($cpf)
            {
                        $this->cpf = $cpf;

                        return $this;
            }

            public function getEmail()
            {
                        return $this->email;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setEmail($email)
            {
                        $this->email = $email;

                        return $this;
            }

            public function getTelefone()
            {
                        return $this->telefone;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setTelefone($telefone)
            {
                        $this->telefone = $telefone;

                        return $this;
            }

            public function getRua()
            {
                        return $this->rua;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setRua($rua)
            {
                        $this->rua = $rua;

                        return $this;
            }

            public function getNumero()
            {
                        return $this->numero;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setNumero($numero)
            {
                        $this->numero = $numero;

                        return $this;
            }
            public function getComplemento()
            {
                        return $this->complemento;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setComplemento($complemento)
            {
                        $this->complemento = $complemento;

                        return $this;
            }

            public function getCidade()
            {
                        return $this->cidade;
            }

            /**
             * Set the value of this
             *
             * @return  self
             */ 
            public function setCidade($cidade)
            {
                        $this->cidade = $cidade;

                        return $this;
            }
    }

?>