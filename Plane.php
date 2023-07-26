<?php

class Plane
{
    private int $id;
    private string $name;
    private int $capacity;
    private bool $full;


    public function __construct(int $id, $PDO){
        $query="SELECT * from plane where id=:id";
        $statement = $PDO->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $customer = $statement->fetch(PDO::FETCH_ASSOC);
        $this->id = $customer["id"];
        $this->name = $customer["name"];
        $this->capacity = $customer["capacity"];
        $this->full = $customer["full"];
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getFull()
    {
        return $this->full;
    }

    public function setFull($full)
    {
        $this->full = $full;

        return $this;
    }
}