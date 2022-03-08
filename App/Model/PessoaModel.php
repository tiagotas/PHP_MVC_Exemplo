<?php

/**
 * 
 */
class PessoaModel
{
    /**
     * 
     */
    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco;


    /**
     * Chama a classe DAO para acesso ao Banco de Dados e salvar o objeto
     * no banco de dados.
     */
    public function save()
    {
        include 'DAO/PessoaDAO.php'; // Inclusão do arquivo DAO.

        $dao = new PessoaDAO(); // Instanciando a classe DAO.

        // chamando o método save da classe DAO e passando a propria instancia 
        // da model para a classe DAO. Estamos fazendo isso porque o objeto em si
        // foi preenchido na Controller correspondente.
        $dao->save($this); 
    }


    /**
     * 
     */
    public function delete()
    {

    }
}