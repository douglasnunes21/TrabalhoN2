<?php
include_once'Conexao.php';
include_once'../model/InfoagendaModel.php';

class InfoagendaDao{

    public static function inserir($infoagenda){
        $sql = "INSERT INTO infoagenda (date_format(datamarcada,'%d/%m/%Y'), horario, id_tutor, id_pet) VALUES"
        ."('".$infoagenda->getData()."','".$infoagenda->getHorario()."','".$infoagenda->getTutor()."','".$infoagenda->getPet()."');";
        Conexao::executar($sql);
    }

    public static function buscar(){
        $sql = "SELECT i.id, date_format(i.datamarcada,'%d/%m/%Y'), i.horario, i.id_tutor,i.id_pet, c.nome, p.nome FROM infoagenda i, cliente c, pet p WHERE i.id_tutor = c.id and i.id_pet = p.id ORDER BY datamarcada";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if($result != NUll){
            while(list($_id, $_datamarcada, $_horario, $_id_tutor, $_id_pet, $_tutor, $_pet) = mysqli_fetch_row($result)){
                $cliente = new Cliente();
                $cliente->setId($_id_tutor);
                $cliente->setNome($_tutor);

                $pet = new Pet();
                $pet->setId($_id_pet);
                $pet->setNome($_pet);

                $infoagenda = new Infoagenda();
                $infoagenda->setId($_id);
                $infoagenda->setData($_datamarcada);
                $infoagenda->setHorario($_horario);
                $infoagenda->setTutor($_tutor);
                $infoagenda->setPet($_pet);
                $lista->append($infoagenda);
            }
        }
        return $lista;
    }

    public static function excluir($id){
        $sql = "DELETE from infoagenda WHERE id=".$id;
        Conexao::executar($sql);
    }

    public static function buscarPorId($id){
        $sql = "SELECT id, date_format(datamarcada,'%d/%m/%Y'), horario, id_tutor, id_pet FROM infoagenda WHERE id=".$id;
        $result = Conexao::consultar($sql);
        if($result != NUll){
           list($_id, $_data, $_horario, $_idtutor, $_idpet) = mysqli_fetch_row($result);
                $infoagenda = new Infoagenda();
                $infoagenda->setId($_id);
                $infoagenda->setData($_data);
                $infoagenda->setHorario($_horario);
                $infoagenda->setTutor($_idtutor);
                $infoagenda->setPet($_idpet);
        }
        return $infoagenda;
    }
    
    public static function buscarporData($data){
        $sql = "SELECT i.id, date_format(i.datamarcada,'%d/%m/%Y'), i.horario, i.id_tutor,i.id_pet, c.nome, p.nome FROM infoagenda i, cliente c, pet p WHERE i.id_tutor = c.id and i.id_pet = p.id and datamarcada=".$data;
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if($result != NUll){
            while(list($_id, $_datamarcada, $_horario, $_id_tutor, $_id_pet, $_tutor, $_pet) = mysqli_fetch_row($result)){
                $cliente = new Cliente();
                $cliente->setId($_id_tutor);
                $cliente->setNome($_tutor);

                $pet = new Pet();
                $pet->setId($_id_pet);
                $pet->setNome($_pet);

                $infoagenda = new Infoagenda();
                $infoagenda->setId($_id);
                $infoagenda->setData($_datamarcada);
                $infoagenda->setHorario($_horario);
                $infoagenda->setTutor($_tutor);
                $infoagenda->setPet($_pet);
                $lista->append($infoagenda);
            }
        }
        return $lista;
    }



}

?>