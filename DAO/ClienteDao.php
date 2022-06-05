<?php
include_once'Conexao.php';
include_once'../model/ClienteModel.php';

class ClienteDao{

    public static function inserir($cliente){
        $sql = "INSERT INTO cliente (nome, nacionalidade, cpf, email, telefone, rua, numero, complemento, id_cidade) VALUES"
        ."('".$cliente->getNome()."','".$cliente->getNacionalidade()."','".$cliente->getCpf()."','".$cliente->getEmail()."','".$cliente->getTelefone()."','".$cliente->getRua()."','".$cliente->getNumero()."','".$cliente->getComplemento()."','".$cliente->getCidade()."');";
        Conexao::executar($sql);
    }
    

    public static function buscar(){
        $sql = "SELECT cl.id, cl.nome, cl.nacionalidade, cl.cpf, cl.email, cl.telefone, cl.rua, cl.numero, cl.complemento, cl.id_cidade, c.nome FROM cliente cl, cidade c WHERE c.id = cl.id_cidade ORDER BY cl.nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if($result != NUll){
            while(list($_id, $_nome, $_nacionalidade, $_cpf, $_email, $_telefone, $_rua, $_numero, $_complemento, $_idCidade, $_nomeCidade) = mysqli_fetch_row($result)){
                $cidade = new Cidade();
                $cidade->setId($_idCidade);
                $cidade->setNome($_nomeCidade);

                $cliente = new Cliente();
                $cliente->setId($_id);
                $cliente->setNome($_nome);
                $cliente->setNacionalidade($_nacionalidade);
                $cliente->setCpf($_cpf);
                $cliente->setTelefone($_telefone);
                $cliente->setEmail($_email);
                $cliente->setRua($_rua);
                $cliente->setNumero($_numero);
                $cliente->setComplemento($_complemento);
                $cliente->setCidade($_idCidade);
                $lista->append($cliente);
            }
        }
        return $lista;
    }

    public static function buscarPorId($id){
        $sql = "SELECT id, nome, nacionalidade, cpf, email, telefone, rua, numero, complemento, id_cidade FROM cliente WHERE id=".$id;
        $result = Conexao::consultar($sql);
        if($result != NUll){
           list($_id, $_nome, $_nacionalidade, $_cpf, $_telefone, $_rua, $_numero, $_complemento, $_idCidade) = mysqli_fetch_row($result);
           $cliente = new Cliente();
           $cliente->setId($_id);
           $cliente->setId($_nome);
           $cliente->setId($_nacionalidade);
           $cliente->setId($_cpf);
           $cliente->setId($_telefone);
           $cliente->setId($_rua);
           $cliente->setId($_numero);
           $cliente->setId($_complemento);
        }
        return $cliente;
    }

}


?>