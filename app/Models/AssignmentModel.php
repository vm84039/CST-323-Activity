<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AssignmentModel
{
    private $courseID;
    private $teacherID;
    private $assignmentID;
    private $assigmentName;
    private $MaxPoints;
    private $earnedPoints;
    private $grade;
    
    
    public function getCourseID()
    {
        return $this->courseID;
    }

    public function setCourseID($courseID)
    {
        $this->courseID = $courseID;
    }

    public function getTeacherID()
    {
        return $this->teacherID;
    }

    public function setTeacherID($teacherID)
    {
        $this->teacherID = $teacherID;
    }

    public function getAssignmentID()
    {
        return $this->assignmentID;
    }

    public function setAssignmentID($assignmentID)
    {
        $this->assignmentID = $assignmentID;
    }

    public function getAssigmentName()
    {
        return $this->assigmentName;
    }

    public function setAssigmentName($assigmentName)
    {
        $this->assigmentName = $assigmentName;
    }

    public function getMaxPoints()
    {
        return $this->MaxPoints;
    }

    public function setMaxPoints($MaxPoints)
    {
        $this->MaxPoints = $MaxPoints;
    }

    public function getEarnedPoints()
    {
        return $this->earnedPoints;
    }

    public function setEarnedPoints($earnedPoints)
    {
        $this->earnedPoints = $earnedPoints;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

   
        
    
}
