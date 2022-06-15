<?php
include_once'Conexao.php';
include_once'../model/ClienteModel.php';
include_once'../model/PetModel.php';

class PetDao{

    public static function inserir($pet){
        $sql = "INSERT INTO pet (nome, id_tutor, raca, idade, inf_ad) VALUES"
        ."('".$pet->getNome()."','".$pet->getId_tutor()."','".$pet->getRaca()."','".$pet->getIdade()."','".$pet->getInf_ad()."');";
        Conexao::executar($sql);
    }

    public static function buscar(){
        $sql = "SELECT p.id, p.nome, p.id_tutor, p.raca, p.idade, p.inf_ad, c.nome FROM pet p, cliente c WHERE p.id_tutor = c.id ORDER BY p.nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if($result != NUll){
            while(list($_id, $_nome, $_idtutor, $_raca, $_idade, $_inf_ad, $_nometutor) = mysqli_fetch_row($result)){
                $cliente = new Cliente();
                $cliente->setId($_idtutor);
                $cliente->setNome($_nometutor);

                $pet = new Pet();
                $pet->setId($_id);
                $pet->setNome($_nome);
                $pet->setId_tutor($cliente);
                $pet->setRaca($_raca);
                $pet->setIdade($_idade);
                $pet->setInf_ad($_inf_ad);
                $lista->append($pet);
            }
        }
        return $lista;
    }

    public static function buscarPorId($id){
        $sql = "SELECT id, nome, id_tutor, raca, idade, inf_ad FROM pet WHERE id=".$id;
        $result = Conexao::consultar($sql);
        if($result != NUll){
           list($_id, $_nome, $_id_tutor, $_raca, $_idade, $_inf_ad) = mysqli_fetch_row($result);
                $pet = new Pet();
                $pet->setId($_id);
                $pet->setNome($_nome);
                $pet->setId_tutor($_id_tutor);
                $pet->setRaca($_raca);
                $pet->setIdade($_idade);
                $pet->setInf_ad($_inf_ad);
        }
        return $pet;
    }

    public static function editar($pet){
        $sql = "UPDATE pet SET "
               ." nome = '".$pet->getNome()."',"  
               ." id_tutor = '".$pet->getId_tutor()."',"  
               ." raca = '".$pet->getRaca()."',"
               ." idade = '".$pet->getIdade()."',"
               ." inf_ad = '".$pet->getInf_ad()."'"  
               ." WHERE id = ".$pet->getId();
        Conexao::executar($sql);
    }

    public static function excluir($id){
        $sql = "DELETE from pet WHERE id=".$id;
        Conexao::executar($sql);
    }

    public static function buscartutor(){
        $sql = "SELECT p.id, p.nome, p.id_tutor, p.raca, p.idade, p.inf_ad, c.nome FROM pet p, cliente c WHERE p.id_tutor = c.id ORDER BY p.nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if($result != NUll){
            while(list($_id, $_nome, $_idtutor, $_raca, $_idade, $_inf_ad, $_nometutor) = mysqli_fetch_row($result)){
                $cliente = new Cliente();
                $cliente->setId($_idtutor);
                $cliente->setNome($_nometutor);

                $pet = new Pet();
                $pet->setId($_id);
                $pet->setNome($_nome);
                $pet->setId_tutor($cliente);
                $pet->setRaca($_raca);
                $pet->setIdade($_idade);
                $pet->setInf_ad($_inf_ad);
                $lista->append($pet);
            }
        }
        return $lista;
    }

}