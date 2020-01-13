<?php

class User
{

    private $user_id;
    private $name;
    private $type;
    private $price;
    private $quantity;
    private $createDate;
    private $description;

    public function __construct($_name, $_type, $_price, $_quantity, $_createDate, $_description)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->createDate = $_createDate;
        $this->description = $_description;

    }

    /**
     * @param mixed $product_code
     */
    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }
    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}