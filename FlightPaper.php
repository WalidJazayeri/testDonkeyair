<?php

class FlightPaper
{
    private int $id;
    private int $flightId;
    private int $customerId;

    public function __construct(int $id, $PDO){
        $query="SELECT * from flight_paper where id=:id";
        $statement = $PDO->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $customer = $statement->fetch(PDO::FETCH_ASSOC);
        $this->id = $customer["id"];
        $this->flightId = $customer["flight_id"];
        $this->customerId = $customer["customer_id"];
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