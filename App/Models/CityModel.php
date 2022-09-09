<?php
namespace App\Models;
use baseConnection;

include_once "config.php";

class CityModel {

    private $connection;

    public function __construct()
    {
        $this->connection = baseConnection::dbConn();
    }
    public function findAll($page, $perPage, $fields)
    {
        $fields = $fields ?? "*";
        $limit = "";
        if(is_numeric($page) and is_numeric($perPage)){
            $page = ($page - 1) * $perPage;
            $limit = " LIMIT $page,$perPage";
        }
        $stmt = $this->connection->query( /** @lang query */ "SELECT $fields FROM city $limit");
        return $stmt->fetchAll();
    }
    public function find($id)
    {
        $stmt = $this->connection->query( /** @lang query */ "SELECT * FROM city");
        return $stmt->fetchAll();
    }
    public function create($cityName , $provinceName)
    {
        $sql = ("INSERT INTO `city` (province_id,name) VALUES (:cityName,:provinceName)");
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':cityName' => $cityName, ':provinceName' => $provinceName]);
        return $stmt->rowCount();
    }
    public function update($id,$name)
    {
        $sql = "UPDATE `city` SET `name` = :name WHERE `city`.`id` = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([":name" => $name, ":id" => $id]);
        return $stmt->rowCount();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `city` WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $result = $stmt->execute([":id" => $id]);
        return $stmt->rowCount();
    }

}



