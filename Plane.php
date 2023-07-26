<?php

class Plane
{
    private int $id;
    private string $name;
    private int $capacity;
    private bool $full;

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