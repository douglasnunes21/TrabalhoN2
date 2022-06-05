<?php
include_once'Conexao.php';
include_once'../model/CidadeModel.php';

class CidadeDao{

    public static function inserir($cidade){
        $sql = "INSERT INTO cidade (nome, id_estado, id_pais, cep) VALUES"
        ."('".$cidade->getNome()."','".$cidade->getEstado()."','".$cidade->getPais()."','".$cidade->getCep()."');";
        Conexao::executar($sql);
    }
    

    public static function buscar(){
        $sql = "SELECT c.id, c.nome, c.id_estado, c.id_pais, c.cep, e.nome, p.nome FROM cidade c, estado e, pais p WHERE e.id = c.id_estado and p.id = c.id_pais ORDER BY c.nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if($result != NUll){
            while(list($_id, $_nome, $_idEstado, $_idPais, $_cep, $_nomeEstado, $_nomePais) = mysqli_fetch_row($result)){
                $pais = new Pais();
                $pais->setId($_idPais);
                $pais->setNome($_nomePais);

                $estado = new Estado();
                $estado->setId($_idEstado);
                $estado->setNome($_nomeEstado);

                $cidade = new Cidade();
                $cidade->setId($_id);
                $cidade->setNome($_nome);
                $cidade->setEstado($_nomeEstado);
                $cidade->setPais($_nomePais);
                $cidade->setCep($_cep);
                $lista->append($cidade);
            }
        }
        return $lista;
    }

}


?>