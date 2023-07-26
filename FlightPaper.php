<?php

class Customer
{
    private int $id;
    private int $flightId;
    private int $customerId;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getFlightId()
    {
        return $this->flightId;
    }

    public function setFlightId($flightId)
    {
        $this->flightId = $flightId;

        return $this;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }
}