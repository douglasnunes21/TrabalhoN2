<?php
include_once'Conexao.php';
include_once'../model/ClienteModel.php';
include_once'../model/PetModel.php';

class ClienteDao{



    public static function pesquisar($cpf){
        $sql = "SELECT nome FROM cliente WHERE cpf=".$cpf;
        Conexao::executar($sql);
    }

}