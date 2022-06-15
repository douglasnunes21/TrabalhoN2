<?php

    class Infoagenda{

        private $id;
        private $data;
        private $horario;
        private $tutor;
        private $pet;

        public function __construct($data=null, $horario=null, $tutor=null, $pet=null)
        {
            $this->data = $data;
            $this->horario = $horario;
            $this->tutor = $tutor;
            $this->pet = $pet;
        }



            /**
             * Get the value of data
             */ 
            public function getData()
            {
                        return $this->data;
            }

            /**
             * Set the value of data
             *
             * @return  self
             */ 
            public function setData($data)
            {
                        $this->data = $data;

                        return $this;
            }

            /**
             * Get the value of horario
             */ 
            public function getHorario()
            {
                        return $this->horario;
            }

            /**
             * Set the value of horario
             *
             * @return  self
             */ 
            public function setHorario($horario)
            {
                        $this->horario = $horario;

                        return $this;
            }

            /**
             * Get the value of tutor
             */ 
            public function getTutor()
            {
                        return $this->tutor;
            }

            /**
             * Set the value of tutor
             *
             * @return  self
             */ 
            public function setTutor($tutor)
            {
                        $this->tutor = $tutor;

                        return $this;
            }

            /**
             * Get the value of pet
             */ 
            public function getPet()
            {
                        return $this->pet;
            }

            /**
             * Set the value of pet
             *
             * @return  self
             */ 
            public function setPet($pet)
            {
                        $this->pet = $pet;

                        return $this;
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
    }





?>