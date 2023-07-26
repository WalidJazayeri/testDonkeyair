
<?php

require_once 'PdoConnect.php';



class Customer
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private bool $admin;

    public function __construct(int $id, $PDO){
        $query="SELECT * from customer where id=:id";
        $statement = $PDO->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $customer = $statement->fetch(PDO::FETCH_ASSOC);
        $this->id = $customer["id"];
        $this->firstname = $customer["firstname"];
        $this->lastname = $customer["lastname"];
        $this->email = $customer["email"];
        $this->password = $customer["password"];
        $this->admin = $customer["admin"];
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

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getAdmin()
    {
        return $this->admin;
    }

    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }
}
?>