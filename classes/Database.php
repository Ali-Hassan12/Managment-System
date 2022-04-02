<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=sms;", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "sms";
    private $port = "3306";

    public function read(string $query)
    {
        $pdo = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname;", "$this->username", "$this->password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare($query);
        $statement->execute();
        return $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function write(string $query)
    {
        $pdo = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname;", "$this->username", "$this->password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo->exec($query);
    }
}
