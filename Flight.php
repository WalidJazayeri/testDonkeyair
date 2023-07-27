<?php

require_once "header.php";

class Flight
{
    private int $id;
    private int $num;
    private string $date;
    private string $arrival_date;
    private string $departure_time;
    private string $arrival_time;
    private float $price;
    private string $first_airport;
    private string $last_airport;
    private int $plane_id;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNum()
    {
        return $this->num;
    }

    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getDeparture_time()
    {
        return $this->departure_time;
    }

    public function setDeparture_time($departure_time)
    {
        $this->departure_time = $departure_time;

        return $this;
    }

    public function getArrival_time()
    {
        return $this->arrival_time;
    }

    public function setArrival_time($arrival_time)
    {
        $this->arrival_time = $arrival_time;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getFirst_airport()
    {
        return $this->first_airport;
    }

    public function setFirst_airport($first_airport)
    {
        $this->first_airport = $first_airport;

        return $this;
    }

    public function getLast_airport()
    {
        return $this->last_airport;
    }

    public function setLast_airport($last_airport)
    {
        $this->last_airport = $last_airport;

        return $this;
    }

    public function getPlane_id()
    {
        return $this->plane_id;
    }

    public function setPlane_id($plane_id)
    {
        $this->plane_id = $plane_id;

        return $this;
    }

    public function getArrival_date()
    {
        return $this->arrival_date;
    }

    public function setArrival_date($arrival_date)
    {
        $this->arrival_date = $arrival_date;

        return $this;
    }
}