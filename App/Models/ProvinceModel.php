<?php
namespace App\Models;

use baseConnection;
include_once "config.php";

class ProvinceModel {

    private $connection;

    public function __construct()
    {
        $this->connection = baseConnection::dbConn();
    }
    public function findAll()
    {
        $stmt = $this->connection->query( /** @lang query */ "SELECT * FROM province");
        return $stmt->fetchAll();
    }

}



