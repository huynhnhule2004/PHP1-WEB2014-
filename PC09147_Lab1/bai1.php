<?php
class Person
{
    public $name;

    public $age;

    public $address;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getInfo()
    {
        return "Name: " . $this->name . "<br>" .
            "Age: " . $this->age . "<br>" .
            "Address: " . $this->address;
    }

    public function canVote()
    {
        if ($this->age >= 18) {
            return true;
        } else {
            return false;
        }
    }
}

//Use class person
$person = new Person();
$person->setName("Nhu");
$person->setAge(20);
$person->setAddress("Can Tho");

//Display person information and check whether they can vote
echo $person->getInfo() . "<br>";
if ($person->canVote()) {
    echo "This person can vote.";
} else {
    echo "This person cannot vote.";
}

