<?php

class UserDB
{
    private $conn;

    public function __construct()
    {
        $db = new DBconnect();
        $this->conn = $db->connect();
    }

    public function getList()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $user = new User($item['name'], $item['type'], $item['price'], $item['quantity'], $item['createDate'], $item['description']);
            $user->setUserId($item['user_id']);
            array_push($arr, $user);
        }
        return $arr;

    }

    public function addUser($user)
    {
        $sql = "INSERT INTO product (name,type,price,quantity,createDate,description) VALUE (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $name = $user->getName();
        $type = $user->getType();
        $price = $user->getPrice();
        $quantity = $user->getQuantity();
        $creatDate = $user->getCreateDate();
        $description = $user->getDescription();
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $type);
        $stmt->bindParam(3, $price);
        $stmt->bindParam(4, $quantity);
        $stmt->bindParam(5, $creatDate);
        $stmt->bindParam(6, $description);
        $stmt->execute();

    }

    public function deleteUser($userId)
    {
        $sql = "DELETE FROM product WHERE user_id =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $userId);
        $stmt->execute();
    }

    public function editUser($userID, $name, $type, $price,$quantity,$createDate,$description)
    {
        $sql = "UPDATE product SET name = :name ,type = :type ,price = :price,quanlity = :quantity,createDate = :createDate,description = :description WHERE id=$userID";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':quanlity', $quantity);
        $stmt->bindParam(':createDate', $createDate);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
    }
    public function getUserById($userId)
    {
        $sql = "SELECT * FROM product WHERE id=$userId";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch();
    }




}
