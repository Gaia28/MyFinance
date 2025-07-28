<?php 
namespace Database;

use PDO;
use PDOException;
use Exception;

use Dotenv\Dotenv;

class Database{
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $connection;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        $host = $_ENV['DB_HOST'];
        $user = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        $dbname = $_ENV['DB_DATABASE'];

         try {

            $this->connection = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }catch (Exception $e) {
            die("OPS! Um erro inesperado aconteceu " . $e->getMessage());
        }
    }
    public function getConnection()
    {
        return $this->connection;
    }
}

