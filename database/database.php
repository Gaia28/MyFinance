<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

class databaseConnection{
    private $host;
    private $port;
    private $database;
    private $username;
    private $password;

    function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();

        $this->host = $_ENV['DB_HOST'];
        $this->port = $_ENV['DB_PORT'];
        $this->database = $_ENV['DB_DATBASE'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
    }

    public function connect(){
        try{
            $pdo = new PDO("mysql:dbname={$this->database};host={$this->host};port={$this->port}", $this->username, $this->password);
           
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }catch(Exception $e){
            echo "An error occurred: " . $e->getMessage();
        }
    }
    
}


?>