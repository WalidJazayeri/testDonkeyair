<?php

require_once "header.php";

class Flight_Paper
{
    private int $id;
    private int $flight_id;
    private int $customer_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getFlight_id()
    {
        return $this->flight_id;
    }

    public function setFlight_id($flight_id)
    {
        $this->flight_id = $flight_id;

        return $this;
    }

    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }
}