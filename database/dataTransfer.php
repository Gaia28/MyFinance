<?php 
namespace Database;

use Database\Database;
use Exception;
use PDO;
use PDOException;

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
    public function getUserByEmail($email) {
        try {
            $query = "SELECT * FROM usuarios WHERE email = :email";
            $preparedStatement = $this->connectionPDO->prepare($query);
            $preparedStatement->bindParam(':email', $email);
            $preparedStatement->execute();
            return $preparedStatement->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die("Erro ao buscar usuário: " . $e->getMessage());
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
                return true; 
            } else {
                return false; 
            }

        }catch (Exception $e) {
            die("Erro ao verificar dados: " . $e->getMessage());
        }

    }
    public function inserFinance($table, $descricao, $valor, $user_id) {
       try{
            $query = "INSERT INTO {$table} (descricao, valor, user_id) VALUES (:descricao, :valor, :user_id)";
            $preparedStatement = $this->connectionPDO->prepare($query);
            $preparedStatement->bindParam(':descricao', $descricao);
            $preparedStatement->bindParam(':valor', $valor);
            $preparedStatement->bindParam(':user_id', $user_id);
            $result = $preparedStatement->execute();

            if ($result) {
                return true; 
            } else {
                return false; 
            }
       }catch (Exception $e) {
            die("Erro ao inserir dados financeiros: " . $e->getMessage());
        }catch (PDOException $e) {
              die("Erro ao carregar dados no banco: " . $e->getMessage());
        }
    }

    public function getFinance($table, $user_id){
        try{
            $query = "SELECT * FROM {$table} WHERE user_id = :user_id";
            $preparedStatement = $this->connectionPDO->prepare($query);
            $preparedStatement->bindParam(':user_id', $user_id);
            $preparedStatement->execute();
            $result = $preparedStatement->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                return $result; 
            } else {
                return false; 
            }
        }catch (Exception $e) {
            die("Erro ao buscar dados financeiros: " . $e->getMessage());
    }catch (PDOException $e) {
            die("Erro ao carregar dados financeiros: " . $e->getMessage());
        }
    }
    

}
?>