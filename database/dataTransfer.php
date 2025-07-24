<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/connection.php';

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

}
?>