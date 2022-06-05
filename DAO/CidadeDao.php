<?php
include_once'Conexao.php';
include_once'../model/CidadeModel.php';

    public static function buscar(){
        $sql = "SELECT e.id, e.nome, e.uf, e.id_pais, p.nome, p.sigla FROM estado e, pais p WHERE p.id = e.id_pais ORDER BY e.nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if($result != NUll){
            while(list($_id, $_nome, $_uf, $_idPais, $_nomePais, $_siglaPais) = mysqli_fetch_row($result)){
                $pais = new Pais();
                $pais->setId($_idPais);
                $pais->setNome($_nomePais);
                $pais->setSigla($_siglaPais);

                $estado = new Estado();
                $estado->setId($_id);
                $estado->setNome($_nome);
                $estado->setUf($_uf);
                $estado->setPais($pais);
                $lista->append($estado);
            }
        }
        return $lista;
}








?>