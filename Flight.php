<?php

class Flight
{
    private int $id;
    private int $num;
    private string $date;
    private string $departureTime;
    private string $arrivalTime;
    private int $price;
    private string $firstAirport;
    private string $lastAirport;
    private int $planeId;


    public function __construct(int $price){
        $this->price=$price;
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

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;

        return $this;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime($arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;

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

    public function getFirstAirport()
    {
        return $this->firstAirport;
    }

    public function setFirstAirport($firstAirport)
    {
        $this->firstAirport = $firstAirport;

        return $this;
    }

    public function getLastAirport()
    {
        return $this->lastAirport;
    }

    public function setLastAirport($lastAirport)
    {
        $this->lastAirport = $lastAirport;

        return $this;
    }

    public function getPlaneId()
    {
        return $this->planeId;
    }

    public function setPlaneId($planeId)
    {
        $this->planeId = $planeId;

        return $this;
    }
}