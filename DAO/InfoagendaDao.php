<?php
include_once'Conexao.php';
include_once'../model/InfoagendaModel.php';

class InfoagendaDao{

    public static function inserir($infoagenda){
        $sql = "INSERT INTO infoagenda (datamarcada, horario, id_tutor, id_pet) VALUES"
        ."('".$infoagenda->getData()."','".$infoagenda->getHorario()."','".$infoagenda->getTutor()."','".$infoagenda->getPet()."');";
        Conexao::executar($sql);
    }
    
}

?>