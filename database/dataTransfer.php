<?php 
namespace Database;

use Database\Database;
use Exception;
use PDO;

class DataTransfer{
    private $connectionPDO;

    public function __construct()
    {
        $db = new Database();
        $this->connectionPDO = $db->getConnection();
        
    }
    public function insertUser($fullname, $email, $password) {
        try
        {
            $query = "INSERT INTO usuarios (nomeCompleto, email, senha) VALUES (:nomeCompleto, :email, :senha)";
            $preparedStatement = $this->connectionPDO->prepare($query);

            $preparedStatement->bindParam(':nomeCompleto', $fullname);
            $preparedStatement->bindParam(':email', $email);
            $preparedStatement->bindParam(':senha',$password);

            $result = $preparedStatement->execute();

        }catch (Exception $e) {
            die("Erro ao inserir usuário: " . $e->getMessage());
        }

    }
    //verificar a segurança da query (sql injection)
    public function verifyData($value, $table, $column) {
        try{
            $query = "SELECT {$column} FROM {$table} WHERE {$column} = :value";
            $preparedStatement = $this->connectionPDO->prepare($query);
            $preparedStatement->bindParam(':value', $value);
            $preparedStatement->execute();
            $result = $preparedStatement->fetch(PDO::FETCH_ASSOC);
            if($result){
                return true; // Dados encontrados
            } else {
                return false; // Dados não encontrados
            }

        }catch (Exception $e) {
            die("Erro ao verificar dados: " . $e->getMessage());
        }

    }
    public function inserFinance($table, $descricao, $valor, $data) {
       try{
            $query = "INSERT INTO {$table} (descricao, valor, data) VALUES (:descricao, :valor, :data)";
            $preparedStatement = $this->connectionPDO->prepare($query);
            $preparedStatement->bindParam(':descricao', $descricao);
            $preparedStatement->bindParam(':valor', $valor);
            $preparedStatement->bindParam(':data', $data);
            $result = $preparedStatement->execute();

            if ($result) {
                return true; // Inserção bem-sucedida
            } else {
                return false; // Falha na inserção
            }
       }catch (Exception $e) {
            die("Erro ao inserir dados financeiros: " . $e->getMessage());
        }
    }
    

}
?>