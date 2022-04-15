<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranscriptModel
{
    private $studentID;
    private $firstName;
    private $lastName;
    private $courseID;
    private $courseName;
    private $teacherID;
    private $teacherName;
    private $courseGrade;
    public function getStudentID()
    {
        return $this->studentID;
    }

    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getCourseID()
    {
        return $this->courseID;
    }

    public function setCourseID($courseID)
    {
        $this->courseID = $courseID;
    }

    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }

    public function getTeacherID()
    {
        return $this->teacherID;
    }

    public function setTeacherID($teacherID)
    {
        $this->teacherID = $teacherID;
    }

    public function getTeacherName()
    {
        return $this->teacherName;
    }

    public function setTeacherName($teacherName)
    {
        $this->teacherName = $teacherName;
    }

    public function getCourseGrade()
    {
        return $this->courseGrade;
    }

    public function setCourseGrade($courseGrade)
    {
        $this->courseGrade = $courseGrade;
    }

    
    
    
}