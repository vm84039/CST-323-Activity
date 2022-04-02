<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StudentModel
{
    private $studentId;
    private $firstName;
    private $lastName;
    private $age;
    private $enrollmentYear; 
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    public function __construct($studentId, $firstName, $lastName, $age, $enrollmentYear) { // A constructor.
        $this->studentId = $studentId;
        $this->firstName = $firstName; 
        $this->lastName = $lastName; 
        $this->age = $age; 
        $this->enrollmentYear = $enrollmentYear;
}
    public function setId($studentId)
    {
        $this->studentId = $studentId;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getage()
    {
        return $this->age;
    }

    public function getEnrollmentYear()
    {
        return $this->enrollmentYear;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setage($age)
    {
        $this->age = $age;
    }

    public function setEnrollmentYear($enrollmentYear)
    {
        $this->enrollmentYear = $enrollmentYear;
    }


     
}