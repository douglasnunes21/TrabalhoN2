<?php
include_once'Conexao.php';

    class PaisDao{

        public static function inserir($pais){

            $sql = "INSERT INTO pais(nome, sigla) values"
            ."('".$pais->getNome()."','".$pais->getSigla()."');";
            Conexao::executar($sql);

        }

    }

?>